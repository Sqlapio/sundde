<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Jenssegers\Agent\Facades\Agent;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-circle';

    protected static ?string $navigationGroup = 'Sistema';

    protected static ?string $navigationLabel = 'Usuarios';

    public static function form(Form $form): Form
    {
        $device = Agent::device();
        $browser = Agent::browser();

        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('email')
                    ->email()
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                    ->hiddenOn('edit')
                    ->required(),
                Select::make('tipo_usuario')
                    ->label('Rol de usuario')
                    ->options([
                        'administrador' => 'Administrador',
                        'funcionario' => 'Funcionario',
                    ])
                    ->required(),
                    
                Select::make('estado_id')
                    ->options(Estado::query()->pluck('descripcion', 'id'))
                    ->live(),

                Select::make('municipio_id')
                    ->options(fn (Get $get): Collection => Municipio::query()
                        ->where('estado_id', $get('estado_id'))
                        ->pluck('descripcion', 'id')),

                Select::make('estatus')
                    ->options([
                        'activo' => 'Activo',
                        'inactivo' => 'Inactivo',
                    ])
                    ->searchable()
                    ->required(),
                TextInput::make('browser')->default($browser)->disabled(true),
                TextInput::make('device')->default($device)->disabled(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
