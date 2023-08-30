=== My Lazy Loading ===

Autor: Jesús Fernández Ávila
URL: https://github.com/JesusFAvila
Versión: 1.2.0
Compatible con PrestaShop: 1.7.x

== Descripción ==

El Módulo de LazyLoad de Imágenes es un módulo para PrestaShop que agrega automáticamente el atributo 'loading="lazy"' a todas las etiquetas <img> en las páginas de tu tienda. Esta funcionalidad permite la carga perezosa de imágenes, lo que mejora la velocidad de carga de la página al retrasar la carga de imágenes fuera del campo de visión del usuario.

Es importante entender que el atributo 'loading="lazy"' es un atributo de carga perezosa que se agrega dinámicamente mediante JavaScript después de que la página se carga inicialmente. Debido a esta naturaleza, este atributo puede no ser visible en el código fuente del inspector de elementos de los navegadores.

El inspector de elementos muestra el código HTML original que se envía desde el servidor al navegador y no refleja modificaciones posteriores realizadas con JavaScript. Esto significa que aunque el atributo 'loading="lazy"' se aplica y afecta la forma en que las imágenes se cargan en la página, no aparecerá en el inspector de elementos.

Si deseas verificar que la carga perezosa está funcionando correctamente, te recomendamos observar el comportamiento de carga de las imágenes mientras navegas por la página. Notarás que las imágenes se cargan a medida que se desplazan al campo de visión del usuario, lo que mejora la velocidad de carga y la experiencia del usuario.

Recuerda que este comportamiento es normal y es inherente a cómo funciona la carga perezosa con el atributo 'loading="lazy"' en el entorno web actual.


== Instalación desde Prestashop==

1. Descarga el archivo zip del módulo desde la página de GitHub o tu fuente preferida.
2. En tu panel de administración de PrestaShop, ve a la sección "Módulos y servicios".
3. Haz clic en "Cargar un módulo" y selecciona el archivo zip que descargaste.
4. Busca "My Lazy Loading" en la lista de módulos y haz clic en "Instalar".
5. ¡El módulo está instalado y activado!

== Instalación desde FTP==

1. Arrastra la carpeta sin comprimir /mylazyloading.
2. ¡El módulo está instalado y activado!

== Desinstalación desde Prestashop ==

1. En tu panel de administración de PrestaShop, ve a la sección "Módulos y servicios".
2. Busca "My Lazy Loading" en la lista de módulos.
3. Haz clic en "Desinstalar" para eliminar el módulo.

== Desinstalación desde FTP ==

1. En tu de administración del servidor busca la ruta /httpdocs/modules.
2. Selecciona la carpeta /mylazyloading y elimínala

== Uso ==

Una vez instalado y activado, el módulo agregará automáticamente el atributo 'loading="lazy"' a todas las imágenes en las etiquetas <img> de tu tienda. Esto mejorará la velocidad de carga de la página al cargar imágenes perezosamente, es decir, solo cuando estén a punto de aparecer en el campo de visión del usuario.

== Riesgos y Consideraciones ==

- Como con cualquier modificación en un sitio web, es recomendable realizar una copia de seguridad completa antes de instalar el módulo.
- Aunque hemos tomado medidas para garantizar la seguridad y la compatibilidad, no podemos garantizar que el módulo funcione perfectamente en todos los entornos y con todas las personalizaciones de PrestaShop.
- Antes de instalar cualquier módulo, es recomendable probarlo en un entorno de desarrollo para asegurarte de que sea compatible con tu configuración y otros módulos activos.

== Soporte y Contacto ==

Para obtener soporte o informar problemas relacionados con este módulo, puedes contactarnos a través de https://github.com/JesusFAvila.

== Camblog ==

= 1.2.0 =
* Añadida compatibilidad con PrestaShop 1.7.x.
* Mejoras en la documentación.

= 1.0.0 =
* Lanzamiento inicial.

== Agradecimientos ==

Agradecemos tu interés en nuestro módulo y esperamos que sea de utilidad para tu tienda en línea. ¡Gracias por elegir nuestro producto!

