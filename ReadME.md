# 📚 Solanito – Sistema de Biblioteca (Laravel)

**Solanito** es un proyecto educativo desarrollado en Laravel cuyo objetivo principal es **modelar un sistema de biblioteca**, enfocado en la creación de migraciones, estructuras de tablas y relaciones entre modelos utilizando Eloquent ORM.

El proyecto se centra **específicamente en el diseño de base de datos y relaciones entre entidades**, sin incluir interfaces avanzadas ni funcionalidades ajenas al modelo de datos.

---

## 🧩 Estructura de la base de datos

El sistema de biblioteca está conformado por las siguientes tablas y relaciones:

### 1. `authors` (Autores)

Tabla que almacena información sobre autores.

* **Campos**:

  * `id`: clave primaria (BIGINT UNSIGNED)
  * `name`: nombre del autor
  * `nationality`: nacionalidad del autor
  * `timestamps`: `created_at` y `updated_at`

### 2. `books` (Libros)

Cada libro pertenece a un solo autor (relación *muchos a uno*).

* **Campos**:

  * `id`: clave primaria
  * `title`: título del libro
  * `year`: año de publicación
  * `author_id`: clave foránea que referencia a `authors(id)`
  * `timestamps`

* **Relación**:

  * `belongsTo(Author::class)`

### 3. `genres` (Géneros)

Contiene los diferentes géneros literarios (novela, poesía, terror, etc.).

* **Campos**:

  * `id`: clave primaria
  * `name`: nombre del género
  * `timestamps`

### 4. `book_genre` (Tabla pivote)

Relación *muchos a muchos* entre libros y géneros. Un libro puede tener varios géneros, y un género puede aplicarse a muchos libros.

* **Campos**:

  * `book_id`: clave foránea hacia `books(id)`
  * `genre_id`: clave foránea hacia `genres(id)`
  * Clave primaria compuesta (`book_id`, `genre_id`)

* **Relación**:

  * `belongsToMany(Genre::class)` en `Book`
  * `belongsToMany(Book::class)` en `Genre`

---

## 🗃️ Migraciones

Cada tabla fue creada usando migraciones de Laravel:

* `202x_xx_xx_create_authors_table.php`
* `202x_xx_xx_create_books_table.php`
* `202x_xx_xx_create_genres_table.php`
* `202x_xx_xx_create_book_genre_table.php`

Estas migraciones definen las estructuras exactas y las claves foráneas necesarias para mantener la integridad referencial.

---

## 🧠 Modelos Eloquent

Los modelos están configurados para reflejar correctamente las relaciones entre entidades:

### `Author.php`

```php
public function books()
{
    return $this->hasMany(Book::class);
}
```

### `Book.php`

```php
public function author()
{
    return $this->belongsTo(Author::class);
}

public function genres()
{
    return $this->belongsToMany(Genre::class);
}
```

### `Genre.php`

```php
public function books()
{
    return $this->belongsToMany(Book::class);
}
```

---

## 🎯 Objetivo del proyecto

Este proyecto tiene un enfoque **100% académico**, cuyo propósito es demostrar:

* Uso correcto de migraciones con claves primarias y foráneas
* Relaciones 1\:N y N\:M entre modelos
* Estructura limpia y clara de una base de datos relacional
* Aplicación práctica de Eloquent ORM para modelar entidades reales

---

## 🚀 Instrucciones para ejecución

1. Clona el repositorio:
   `git clone https://github.com/tuusuario/solanito.git`

2. Instala dependencias:
   `composer install`

3. Copia y configura tu archivo `.env`

4. Ejecuta las migraciones:
   `php artisan migrate`

5. (Opcional) Inserta datos de prueba:
   `php artisan db:seed`

6. Levanta el servidor:
   `php artisan serve`

---
