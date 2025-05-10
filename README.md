# Tienda Web

**Tienda Web** es una aplicación web orientada a la simulación de una tienda en línea. Cuenta con una interfaz de usuario sencilla para los clientes y un módulo administrativo para la gestión interna de productos, categorías, usuarios y más.

## Características

- **Página principal de la tienda**: Visualización de productos para clientes.
- **Módulo administrativo (`admi/`)**:
  - Panel de control para gestión de productos y categorías.
  - Manejo de sesiones para administradores.
  - Estructura modular: controlador, librerías y contenido visual.
- **Gestión de recursos**:
  - Imágenes en la carpeta `img/`
  - Base de datos importable vía archivo SQL.

## Tecnologías utilizadas

- **Frontend**:
  - HTML, CSS y JavaScript
- **Backend**:
  - PHP (estructura modular tipo MVC simplificado)
- **Base de datos**:
  - MySQL (`addshore.sql`)

## Requisitos previos

- [XAMPP](https://www.apachefriends.org/index.html) o entorno local con Apache, PHP y MySQL.
- Navegador web actualizado.

Estructura del proyecto
tienda-web/
├── admi/
│   ├── controlador/     # Controladores PHP
│   ├── libreria/        # Funciones y librerías comunes
│   └── contenido/       # Vistas y contenido HTML/PHP
├── img/                 # Imágenes del sitio
├── store/               # Posible lógica de productos o scripts
├── addshore.sql         # Script de base de datos
├── principal.html       # Página principal de la tienda
└── README.md
