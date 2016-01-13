<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'plagiarism_unplag', language 'es', branch 'MOODLE_29_STABLE'
 *
 * @package   plagiarism_unplag
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempts'] = 'Intentos realizados';
$string['cronwarning'] = 'La <a href="../../admin/cron.php">cron.php</a> secuencia de mantenimiento no ha sido arrancada por lo menos 30 minutos – Cron tiene que ser configurado para permitir a UNPLAG de funcionar correctamente.';
$string['defaultsdesc'] = 'Los siguientes ajustes son predeterminados cuando está activado el Módulo de Actividades UNPLAG';
$string['defaultupdated'] = 'Datos predeterminados actualizados';
$string['deletedwarning'] = 'Archivo no puede ser encontrado – probablemente fue eliminado por el usuario';
$string['explainerrors'] = 'Esta página muestra todos los archivos que se encuentran en el estado de error.<br/>Cuando los archivos son eliminados en esta página, no podrán ser recomprobados y los errores no se mostrarán a los profesores o estudiantes';
$string['file'] = 'Archivo';
$string['filedeleted'] = 'Archivo eliminado de la cola';
$string['filereset'] = 'Un archivo se ha reiniciado para una nueva entrega al UNPLAG';
$string['fileresubmitted'] = 'Archivo puesto a la cola para nueva sumisión';
$string['getscore'] = 'Recibir puntuación';
$string['heldevents'] = 'Eventos aplazados';
$string['heldeventsdescription'] = '\'Estos son eventos que no se completaron en el primer intento y se pusieron en la fila para ser recomprobados – esto impide los acontecimientos posteriores de comprobación y pueden necesitar una investigación más detallada. Algunos de estos eventos pueden no ser relevantes para UNPLAG.';
$string['id'] = 'ID';
$string['identifier'] = 'Identificador';
$string['module'] = 'Modulo';
$string['name'] = 'Nombre';
$string['noreceiver'] = 'No hay dirección de destinatario';
$string['pending'] = 'Archivo pendiente para ser procesado por UNPLAG';
$string['plagiarism'] = 'Plagio potencial';
$string['pluginname'] = 'Plugin de detección de plagio UNPLAG';
$string['previouslysubmitted'] = 'Procesado anteriormente como';
$string['processing'] = 'Este archivo se ha comprobado con UNPLAG, esperando para que el análisis sea disponible';
$string['progress'] = 'Escaneando';
$string['receivernotvalid'] = 'Esto no es la dirección de destinatario válida.';
$string['refresh'] = 'Actualizar página para ver los resultados';
$string['report'] = 'Ver Reporte completo';
$string['resubmit'] = 'Volver a procesar';
$string['savedconfigfailed'] = 'Se ha ingresado combinación incorrecta de nombre de usuario/contraseña, UNPLAG fue desactivado, por favor vuelve a intentar.';
$string['savedconfigsuccess'] = 'Ajustes de detección de plagio guardados';
$string['scoreavailable'] = 'Este archivo fue procesado por UNPLAG y el Reporte está disponible.';
$string['scorenotavailableyet'] = 'Este archivo no fue procesado por UNPLAG todavía';
$string['showwhenclosed'] = 'Cuando la Actividad está cerrada';
$string['similarity'] = 'SImilitud';
$string['status'] = 'Estado';
$string['studentdisclosure'] = 'Notificar al estudiante sobre Políticas de Privacidad UNPLAG';
$string['studentdisclosuredefault'] = 'Todos archivos subidos serán procesados por el servicio de detección de plagio UNPLAG.';
$string['studentdisclosure_help'] = 'Este texto será mostrado a todos los estudiantes en la página de carga de archivo';
$string['studentemailcontent'] = 'El archivo enviado a comprobación a {$a->modulename} en {$a->coursename} está procesando por detector de plagio UNPLAG.
{$a->modulelink}';
$string['studentemailsubject'] = 'Archivo procesado por UNPLAG';
$string['submitondraft'] = 'Comprobar cuando se sube archivo or primera ves';
$string['submitonfinal'] = 'Comprobar cuando estudiante pone documento para evaluación';
$string['toolarge'] = 'Es un archivo muy grande para procesarlo con UNPLAG';
$string['unknownwarning'] = 'Se ha ocurrido un fallo al intentar de enviar este archivo al UNPLAG';
$string['unplag'] = 'Plugin de detección de plagio UNPLAG';
$string['unplag_api_secret'] = 'API Secret';
$string['unplag_api_secret_help'] = 'API Secret proporcionada por UNPLAG para acceder al API puede encontrar en
<a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplag_client_id'] = 'ID de Cliente';
$string['unplag_client_id_help'] = 'ID de Cliente proporcionado por UNPLAG para acceder al API puede encontrar en
<a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplagdebug'] = 'Debugging';
$string['unplagdefaults'] = 'Ajustes predeterminados de UNPLAG';
$string['unplag_draft_submit'] = 'Cuando el archivo debe de ser procesado por UNPLAG';
$string['unplag:enable'] = 'Permitir a los profesores de activar/desactivar UNPLAG para sus actividades';
$string['unplag_enableplugin'] = 'UNPLAG activado para {$a}';
$string['unplagfiles'] = 'Archivos UNPLAG';
$string['unplag_lang'] = 'Idioma';
$string['unplag_lang_help'] = 'Código de idioma proporcionado por UNPLAG';
$string['unplag:resetfile'] = 'Permitir al profesor de volver a comprobar un archivo con UNPLAG después de que un error';
$string['unplag_show_student_report'] = 'Mostrar reporte de similitud al estudiante.';
$string['unplag_show_student_report_help'] = 'Reporte de similitud proporciona la lista de las partes de la información que fueron plagiados y las fuentes donde UNPLAG ha encontrado este contenido por primera vez';
$string['unplag_show_student_score'] = 'Mostrar taza de similitud al estudiante';
$string['unplag_show_student_score_help'] = 'La taza de similitud es el porcentaje del contenido que coincide con el contenido de otras fuentes.';
$string['unplag_studentemail'] = 'Enviar un mensage al estudiante';
$string['unplag_studentemail_help'] = 'Se enviará un correo al estudiante de que su archivo ha sido procesado y que un reporte está disponible.';
$string['unplag:viewreport'] = 'Permitir a los profesores de ver reporte completo de UNPLAG';
$string['unsupportedfiletype'] = 'Tipo de archivo no soportable por UNPLAG';
$string['useunplag'] = 'Activar UNPLAG';
$string['waitingevents'] = 'Hay {$a->countallevents} eventos esperando el Cron y {$a->countheld} eventos que han sido aplazados para nuevo procesado';
