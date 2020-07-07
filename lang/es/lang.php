<?php
/*
|--------------------------------------------------------------------------
| 5 Steps to Contribute a New Twill Localization at Ease
|--------------------------------------------------------------------------
| 1. Find the "lang.csv" under "lang" directory.
| 2. Import the csv file into a blank Google Sheet.
| 3. Each column is a language, enter the translation for a column. (tips: feel free to freeze rows and columns).
| 4. Download the Google Sheet as CSV, replace the original "lang/lang.csv" with the new one.
| 5. Run the command "php artisan twill:lang" to sync all lang files.
 */

return [
    'auth' => [
        'email' => 'Email',
        'password' => 'Contraseña',
        'forgot-password' => 'Recuperar contraseña',
        'login' => 'Iniciar sesión',
        'login-title' => 'Iniciar sesión',
    ],
    'dashboard' => [
        'search-placeholder' => 'Buscar...',
        'empty-message' => 'Todavía no hay registro de actividades.',
        'all-activity' => 'Todas las actividades',
        'my-activity' => 'Mi actividad',
        'create-new' => 'Crear nuevo',
        'my-drafts' => 'Mis borradores',
        'statitics' => 'Estadísticas',
    ],
    'footer' => [
        'version' => 'Versión',
    ],
    'form' => [
        'content' => 'Contenido',
        'editor' => 'Editor',
    ],
    'listing' => [
        'filter' => [
            'all-items' => 'Todos',
            'mine' => 'Mios',
            'published' => 'Publicados',
            'draft' => 'Borradores',
            'trash' => 'Borrados',
        ],
        'dropdown' => [
            'edit' => 'Editar',
            'unpublish' => 'Despublicar',
            'publish' => 'Publicar',
            'unfeature' => 'Unfeature',
            'feature' => 'Destacar',
            'restore' => 'Restaurar',
            'destroy' => 'Destruir',
            'delete' => 'Borrar',
            'duplicate' => 'Duplicar',
        ],
        'add-new-button' => 'Agregar nuevo',
        'listing-empty-message' => 'No hay registros para mostrar.',
        'languages' => 'Idiomas',
    ],
    'main' => [
        'published' => 'Live',
        'draft' => 'Borrador',
        'create' => 'Crear',
        'update' => 'Actualizar',
        'title' => 'Título',
    ],
    'modal' => [
        'title-field' => 'Título',
        'permalink-field' => 'Permalink',
        'create' => [
            'title' => 'Agregar nuevo',
            'button' => 'Crear',
            'create-another' => 'Crear y agregar otro',
        ],
        'update' => [
            'title' => 'Actualizar',
        ],
    ],
    'nav' => [
        'media-library' => 'Biblioteca Multimedia',
        'cms-users' => 'Usuarios',
        'settings' => 'Configuracion',
        'logout' => 'Logout',
        'admin' => 'Admin',
    ],
    'media-library' => [
        'title' => 'Biblioteca Multimedia',
        'images' => 'Imágenes',
        'files' => 'Archivos',
        'filter-select-label' => 'Filtrar por etiqueta',
        'sidebar' => [
            'empty-text' => 'Ningún archivo seleccionado',
            'files-selected' => 'archivos seleccionados',
            'clear' => 'Limpiar',
            'dimensions' => 'Dimensiones',
        ],
    ],
    'filter' => [
        'search-placeholder' => 'Buscar',
        'toggle-label' => 'Filtrar',
        'apply-btn' => 'Aplicar',
        'clear-btn' => 'Limpiar',
    ],
    'select' => [
        'empty-text' => 'No hay coincidencias.',
    ],
    'uploader' => [
        'dropzone-text' => 'o arrastre los archivos aquí.',
        'upload-btn-label' => 'Agregar nuevo',
    ],
    'fields' => [
        'medias' => [
            'btn-label' => 'Adjuntar imagen',
        ],
        'block-editor' => [
            'collapse-all' => 'Colapsar todo',
            'expend-all' => 'Expandir todo',
            'open-in-editor' => 'Abrir en el editor',
            'create-another' => 'Crear otro',
            'delete' => 'Borrar',
            'add-content' => 'Agregar contenido',
            'preview' => 'Previsualizar',
            'loading' => 'Cargando',
        ],
        'browser' => [
            'attach' => 'Adjuntar',
            'add-label' => 'Agregar',
        ],
        'files' => [
            'add-label' => 'Agregar',
        ],
    ],
    'user-management' => [
        'users' => 'Usuarios',
        'active' => 'Activar',
        'disabled' => 'Deshabilitar',
        'enabled' => 'Habilitar',
        'trash' => 'Borrados',
        'user-image' => 'Imagen',
        'name' => 'Nombre',
        'email' => 'Email',
        'role' => 'Rol',
        'content-fieldset-label' => 'Configuración de Usuario',
        'edit-modal-title' => 'Editar nombre de usuario',
        'update-disabled-user' => 'Actualizar usuario deshabilitado',
        'update-disabled-and-close' => 'Actualizar usuario deshabilitado y cerrar',
        'update-disabled-user-and-create-new' => 'Actualizar usuario deshabilitado y crear nuevo',
        'enable-user' => 'Habilitar usuario',
        'enable-user-and-close' => 'Habilitar usuario y cerrar',
        'enable-user-and-create-new' => 'Habilitar usuario y crear nuevo',
        'update' => 'Actualizar',
        'update-and-close' => 'Actualizar y cerrar',
        'update-and-create-new' => 'Actualizar t crear nuevo',
        'cancel' => 'Cancelar',
    ],
    'publisher' => [
        'switcher-title' => 'Estado',
        'save' => 'Guardar como borrador',
        'save-close' => 'Guardar como borrador y cerrar',
        'save-new' => 'Guardar como borrador y crear nuevo',
        'publish' => 'Publicar',
        'publish-close' => 'Publicar y cerrar',
        'publish-new' => 'Publicar y crear nuevo',
        'update' => 'Actualizar',
        'update-close' => 'Actualizar y cerrar',
        'update-new' => 'Actualizar y creatr nuevo',
        'cancel' => 'Cancelar',
    ],
];