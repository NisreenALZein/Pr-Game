<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GameResource\Pages;
use App\Filament\Resources\GameResource\RelationManagers;
use App\Models\Game;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput; 
use Filament\Forms\Components\DatePicker ;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Tables\Columns\TextColumn ; 
use Filament\Tables\Columns\ImageColumn ;
use Illuminate\Support\Facades\Storage ;

class GameResource extends Resource
{
    protected static ?string $model = Game::class;
    protected static ?string $label = 'Games' ;

    protected static ?string $pluralLabel = 'Games' ;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form

                ->schema([

                    TextInput::make('title')->required()    
                ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);'])
                    ,
                    Select::make('category_id')->label('Category')
                    ->options(Category::all()->pluck('title', 'id')->toArray()) // استخدم toArray() هنا
                    ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);']),


                    TextInput::make('size') // إضافة حقل size
                    ->label('Size') // تعيين الاسم
                    ->type('number') // تعيين نوع الإدخال إلى number
                    ->step(0.01)
                    ->required() // إذا كنت تريد أن يكون الحقل مطلوبًا
                    ->placeholder('Enter size in double')
                    ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);']),
                     
                
                    FileUpload::make('image')
                    ->label('UploadImages') 
                    ->disk('public')
                    ->directory('games/images')
                    ->multiple()
                    ->acceptedFileTypes(['image/*']) // قبول أنواع ملفات الصور فقط
                    ->maxSize(1024) // الحد الأقصى لحجم الملف (1 ميجابايت في هذا المثال)
                    ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);'])
                    ->required() ,

    
                    MarkdownEditor::make('long_description')->required()           
,                    
                    TextInput::make('url_video')->required()
                    ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);']),

                    TextInput::make('url_download')->required()
                    ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);']),


                    TextInput::make('description')->required()
                    ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);']),

                    TextInput::make('Memory')->required()
                    ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);']),


                    TextInput::make('Storage') // إضافة حقل Storage
                      ->numeric() // التأكد من أن الإدخال هو عدد
                      ->label('Storage')
                      ->required()
                      ,
                      DatePicker::make('ReleasedOn')
                      ->label('ReleasedOn Date')
                      ->required(),


                      TextInput::make('Developed_by')->required()
                      ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);']),

                      TextInput::make('Platform')->required()
                      ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);']),

                      TextInput::make('publisher')->required()
                      ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);']),
  

                      TextInput::make('Graphics')->required()
                      ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);']),
  
                      TextInput::make('Genre')->required()
                      ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);']),
                    
                      Select::make('status')
                      ->label('status')
                      ->options([
                          'Live' => 'Live',
                          'NotLive' => 'NotLive',
                      ])
                      ->required()
                      ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);']),

                     

                    Select::make('type')
                    ->label('Type')
                    ->options([
                        'freement' => 'freement',
                        'payment' => 'payment',
                    ])
                    ->reactive()
                    ->afterStateUpdated(fn(callable $set)=>$set('price',null))
                    ->required()
                    ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);']),
                    

                    TextInput::make('price') // إضافة حقل price
                      ->numeric() // التأكد من أن الإدخال هو عدد
                      ->label('Price') // تسمية الحقل
                     ->placeholder('مثال: 12.34') // نص توضيحي
                     ->regex('/^\d+(\.\d{1,2})?$/') // تعبير منتظم للسماح برقم عشري برقمين بعد الفاصلة
                     ->helperText('أدخل رقم عشري برقمين بعد الفاصلة مثل: 12.34')
                     ->required(fn(callable $get)=> $get('type') === 'payment')
                     ->disabled(fn(callable $get)=> $get('type') === 'freement') // التأكد من أن الحقل مطلوب,
                     ->extraAttributes(['style'=>'color : #FFD700 ; background-color: rgba(0,0 ,255.1,0.1);'])

                    
        
                    ])
                    ; 
                }
        
         
     
    public static function table(Table $table): Table
    {
        return $table
              ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('description')->html()->extraAttributes(['style'=>'white-space:normal;word-wrap:break-word;']) 
            ,
                TextColumn::make('size'),
                ImageColumn::make('image')
              ->label('image')
              ->url(fn($record)=> Storage::url($record->image[0]))
              ->default(fn($record)=>$record->name)
              ->size(50)
          ,

                TextColumn::make('price'),
                TextColumn::make('type'),
                TextColumn::make('category.title')
                ->label('category')
                ->searchable()

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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ])
            ;
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
            'index' => Pages\ListGames::route('/'),
            'create' => Pages\CreateGame::route('/create'),
            'edit' => Pages\EditGame::route('/{record}/edit'),
        ];
    }
   
}
