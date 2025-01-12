# Aplicación de Heladería

## Descripción General
Esta es una aplicación de gestión para una heladería, diseñada para facilitar el manejo de productos, clientes y ventas. Está construida utilizando el framework **Laravel** con el soporte administrativo de **Filament** para ofrecer una interfaz amigable y eficiente.

## Características Principales
- **Gestión de helados:**
  - Crear, editar y eliminar sabores de helados.
  - Detalles específicos como nombre, descripción, precio e imagen.
- **Gestión de clientes:**
  - Registro de clientes con información como nombre, correo electrónico y teléfono.
- **Gestión de ventas:**
  - Registro de ventas con información de clientes, helados vendidos, monto y método de pago.
  - Relación directa entre clientes y helados para facilitar la trazabilidad.
- **Interfaz administrativa con Filament:**
  - Navegación simple e intuitiva.
  - Listados, formularios y filtros dinámicos.

## Tecnologías Utilizadas
- **Backend:**
  - Laravel 10
- **Frontend Administrativo:**
  - Filament PHP
- **Base de Datos:**
  - MySQL
- **Estilización:**
  - Filament UI Components
- **Testing y Desarrollo:**
  - Factories, Seeders y Migrations para datos ficticios.

## Requisitos del Sistema
- PHP 8.1+
- Composer
- MySQL 5.7 o superior
- Node.js y npm (opcional para gestión de assets)

## Instalación
1. Clonar el repositorio:
    ```bash
    git clone https://github.com/daleskaguerrero/heladeria
    cd aplicacion-heladeria
    ```

2. Instalar dependencias:
    ```bash
    composer install
    ```

3. Configurar el archivo `.env`:
    - Configura la conexión a la base de datos.

4. Ejecutar migraciones y seeders:
    ```bash
    php artisan migrate --seed
    ```

5. Levantar el servidor:
    ```bash
    php artisan serve
    ```

## Contribuciones
Las contribuciones son bienvenidas. Si deseas agregar nuevas funcionalidades o corregir 
