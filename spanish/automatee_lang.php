<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
 * mithra62 - Automat:ee
 *
 * @package		mithra62:Automatee
 * @author		Eric Lamb
 * @copyright	Copyright (c) 2012, mithra62, Eric Lamb.
 * @link		http://mithra62.com/projects/view/automat-ee/
 * @version		1.2
 * @filesource 	./system/expressionengine/third_party/automatee/language/spanish/
 */

$lang = array(

// Required for MODULES page

'automatee_module_name'		=> 'Automat:ee',
'automatee_module_description'	=> 'Interfaz para crear trabajos Cron desde ExpressionEngine. ',

//----------------------------------------

// Additional Key => Value pairs go here

// END
'description' => 'Descripción',
'description_instructions' => 'Utilice esto para lo que quiere ;)',
'name' => 'Nombre',
'status_instructions' => 'Cambiando el estado a inactivo eliminará éste trabajo Cron de la lista de actividades.',
'inactive' => 'Inactivo',
'active' => 'Activo',
'last_ran' => 'Última vez realizado',
'total_runs' => 'Total Iteraciones',
'status' => 'Estado',
'name_instructions' => 'Simplemente: lo que está llamando a su Cron. Debe ser bastante descriptivo ya que una vez que lo fija, lo más seguro es que olvides por completo los detalles.',
'schedule' => 'Programa',
'schedule_instructions' => '¿Cuando quiere activar su acción? Si necesita un rango de tiempo personalizado elige "Personalizada" de la lista y utilice el sintaxis estándar de Cron para fijar la frequencia.',
'type' => 'Tipo de Cron',
'type_instructions' => '¿Que quiere que Automatee haga?',
'configure' => 'Configurar',
'cron_notify_emails' => 'Emails de Notificación',
'cron_notify_emails_instructions' => 'Incluye una dirección de email en cada línea para que sean notificados cuando se termina cada trabajo Cron. Si no se incluye direcciones de email, no se enviará notificaciones. Direcciones de email inválidos serán eliminados.',
'license_number' => 'Número de Licencia',
'missing_license_number' => 'Por favor incluye su número de licencia. <a href="#config_url#">Introducir Licencia</a> o <a href="http://devot-ee.com/add-ons/automatee/">Comprar una Licencia</a>',
'module_instructions' => '',
'view_crons' => 'Ver Trabajos Cron',
'add_cron' => 'Añadir Trabajo Cron',
'settings' => 'Ajustes',
'cli_crons' => 'Trabajos Cron de la línea de comandos',
'url_crons' => 'Obtener Crons de URL',
'no_crons' => 'No se ha encontrado Trabajos Cron.',
'delete_selected' => 'Borrar Seleccionados',
'command' => 'Comando',
'get_url_address' => 'Obtener Dirección URL',
'cli_command' => 'Comando CLI',
'cron_not_found' => 'No se podido encontrar Cron...',
'cron_details' => 'Detalles Cron',
'delete_crons' => 'Borrar Trabajos Cron',
'plugin' => 'Plugin',
'command_line' => 'Línea de Comando',
'get_url' => 'Obtener URL',
'get_url_instructions' => 'Incluye el URL completo. La petición se hace utilizando el método estándar GET y, si logging está habilitado, la respuesta será guardada. ',
'cli_command_instructions' => 'Incluye el comando exactamente igual que un comando de términal de unix. Nota: Éste funcionalidad no funciona en sistemas basadas en Windows y es contingente en que su sistema dispone de la función exec(). ',
'choose_module' => 'Elige el Módulo y el Método',
'choose_module_instructions' => 'Seleccione el módulo que desea utilizar. Si hay un método específico que desea ejecutar (fuera del controlador) incluye el nombre en su campo de texto correspondiente. Tenga en cuanta que no puede pasar argumentos al método en éste momento.',
'choose_plugin_instructions' => 'Seleccione el Plugin que desea ejecutar. Si hay un método específico que desea ejecutar (fuera del controlador) incluye el nombre en su campo de texto correspondiente. Tenga en cuanta que no puede pasar argumentos al método en éste momento.',
'choose_plugin' => 'Elige el Plugin y Método',
'cron_updated' => 'Cron Actualizado',
'allowed_access_levels' => 'Permitir el Acceso a Todos los Niveles',
'allowed_access_levels_instructions' => 'Inicialmente Automatee solo permite el acceso a Super Admins, pero si necesita el acceso para otros grupos de miembros, selecciónalos de la lista.',
'log_cron_start' => '##cron_name## Empezado.',
'log_cron_sucess' => '##cron_name## Completado.',
'log_module_not_installed' => 'El Módulo No está Instalado',
'log_module_not_exist' => 'El Módulo no existe.',
'log_plugin_not_exist' => 'El Plugin no existe.',
'instructions' => 'Instrucciones',
'installation' => 'Instalación',
'installation_installation' => '
	Tiene algunas opciones a la hora de instalar. Los dos tienen sus pros y contras dependiendo de lo que necesita, así
	que seleccione la opción que mejor le conviene. <br/><br/><strong>Pseudo Cron</strong><br/>
	Para habilitar pseudo cron debe incluir la etiqueta de plantilla de abajo dentro de una plantilla que será ejecutado frecuentemente
	(preferiblemente al final de la página HTML, como una plantilla de pie de página). Utilizando lo de abajo insertará un bug de imagen
	que comporbará la existencia de trabajos de Cron y los ejecutarán si existen.<br/><br/>
	<code>{exp:automatee:pseudo_cron}</code><br /><br />
	Nota: Para utilizar lo anterior debe de haber latitud entre cuando un trabajo de Cron está programada y cuando debe estar ejecutado.
	Si necesita una precisión más exacta utilice la opción de abajo.<br/><br/>
	<strong>Cron Verdadero</strong><br/>
	Esto es el método ideal. Para habilitarlo solamente debe programar un trabajo Cron en el servidor para ejecutar el comando abajo:
	<code>wget "##cron_url##" >/dev/null 2>&1 </code><br /><br />
	El Cron Verdadero es la instalación más apropiada cuando necesita una precisión exacta y tiene los conocimientos técnicos para realizarlo. 
	
',
'adding_crons' => 'Añadiendo Trabajos Cron',

'cron_delete_question' => '¿Esta seguro que desea borrar los trabajos de Cron abajo?',
'module_instructions' => 'Automatee es un interfaz para automatizar su sitio basado en ExpressionEngine. Con Automatee puede fijar la ejecución de plugins y módulos siguiendo un programa, así como crear trabajos de Cron estándar como comandos de shell y peticiones URL, utilizando el sintaxis estándar de Cron dentro de el panel de control de ExpressionEngine. ',

'debug_settings' => 'Ajustes de Depuración',
'enable_debug' => 'Habilitar Depuración',
'enable_debug_instructions' => 'Cuando es habilitado, el modo de depuración enviará notificaciones de email si se detecta cualquier problema con un trabajo de Cron. Dependiendo de como están programados sus trabajos de Cron, quizá recibirá MUCHOS emails.',

'debug_email' => 'Email de Depuración',
'debug_email_instructions' => 'La dirección de email para recibir las notificaciones.',

'status_url_response_500' => '500 Fallo del Servidor',
'status_url_response_404' => '404 Página No Encontrada',
'status_url_response_0' => 'Servidor No Encontrado; Compruebe el URL',
'log_module_method_not_exist' => 'Método de Módulo no existente',
'log_calc_last_run_fail' => "No se ha podido calcular LastRan de Cron '#cron_name# (#cron_id#)'. Intentando arreglar automáticamente...",
'log_last_run_fail' => "'#cron_name# (#cron_id#)' a fallado en el último intento. Ejecutando ahora...",

'log_email_subject' => 'Se ha detectado un error de Automat:ee',
'log_email_message' => "Se ha detectado un error mientras se procesaba el trabajo Cron '#cron_name# (#cron_id#)'. El asunto específico fue '#error_issue#' Abajo se muestra los datos disponibles (si las hay).\n\n------------------------------------\n\n",


'log_cron_start' => 'Trabajo de Cron Empezado',
'log_cron_sucess' => 'El Trabajo de Cron se ha Realizado con Éxito',
''=>''
);