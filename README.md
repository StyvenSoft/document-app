# 📄 Document App

Una aplicación básica construida con Symfony, diseñada para gestionar documentos de manera sencilla y eficiente.

## 🚀 Requisitos

Asegúrate de tener instalados los siguientes componentes:

- PHP >= 8.1  
- Composer  
- Symfony CLI (opcional pero recomendado)  
- Servidor web (Apache/Nginx) o usar el servidor embebido de Symfony  
- MySQL/PostgreSQL (opcional, según base de datos usada)

## ⚙️ Instalación

Clona el repositorio:

```bash
git clone https://github.com/tu-usuario/document-app.git
cd document-app
```

## Comandos básicos

Crea la base de datos (el armario).

```bash
php bin/console doctrine:database:create
```

Define la estructura de una tabla (cómo será un tipo de cajón).
```bash
php bin/console make:entity
```

Escribe las instrucciones para cambiar la estructura de la base de datos (la receta de los cambios en los cajones).
```bash
php bin/console make:migration
```

Aplica los cambios a la base de datos (ejecuta la receta en el armario).
```bash
php bin/console doctrine:migrations:migrate
```