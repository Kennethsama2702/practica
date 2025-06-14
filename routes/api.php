use App\Http\Controllers\ProductoController;

Route::apiResource('productos', ProductoController::class);

GET http://localhost:8000/api/productos

GET http://localhost:8000/api/productos/1

POST http://localhost:8000/api/productos

PUT http://localhost:8000/api/productos/1

DELETE http://localhost:8000/api/productos/1