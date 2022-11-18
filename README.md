# Proyecto Laravel (Manejo de relaciones en Base de Datos)

---


En este proyecto se va a trabajar con el diseño de una base de datos para un blog.
Las entidades que vamos a usar son:
- users
- profiles
- roles
- videos
- posts
- tags
- comments
- categories
- images
- permisos
Ver el Diagrama de la BD.[¹] 
[¹]: Ir a la carpeta /diagrama en la carpeta principal.


Entonces para iniciar la explicación, el proyecto se creó con la tabla predeterminada users así que no se hizo nada de modificacion en esa tabla ni modelo del mismo, el segundo paso fue crear la tabla *'profiles'* la cual, como muestra el diagrama.[¹] Destacando lo más importante de crear esa tabla es la generacion de la `ForeingKey` la cual está haciendo referencia la tabla `users` en el archivo `create_profiles_table.php`. [²]

[²]: las lineas son las siguientes:
> `$table->unsignedBigIntege('user_id')->unique();
>            $table->foreign('user_id')
>            ->references('id')
>            ->on('users')
>            ->onDelete('cascade')
>            ->onUpdate('cascade');`

