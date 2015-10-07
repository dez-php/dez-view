<?php
/*%%SmartyHeaderCode:137989571156152580848776_52110747%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f2925b96c5ae0a9e1972443d4e867c4accd2bdb' => 
    array (
      0 => '/var/www/my/_/dez-view/example/views/wrap.tpl',
      1 => 1444226429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137989571156152580848776_52110747',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56152595227932_86508507',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56152595227932_86508507')) {
function content_56152595227932_86508507 ($_smarty_tpl) {
?>
<div style="border: 2px solid red;  padding: 10px; margin: 10px;">
    Smarty handler
    
    <pre class='xdebug-var-dump' dir='ltr'>
<b>object</b>(<i>Dez\View\Engine\Smarty</i>)[<i>10</i>]
  <i>protected</i> 'smarty' <font color='#888a85'>=&gt;</font> 
    <b>object</b>(<i>Smarty</i>)[<i>11</i>]
      <i>public</i> 'auto_literal' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
      <i>public</i> 'error_unassigned' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>public</i> 'use_include_path' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>private</i> 'template_dir' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=1)</i>
          0 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'./templates/'</font> <i>(length=12)</i>
      <i>public</i> 'joined_template_dir' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'./templates/'</font> <i>(length=12)</i>
      <i>public</i> 'joined_config_dir' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'./configs/'</font> <i>(length=10)</i>
      <i>public</i> 'default_template_handler_func' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'default_config_handler_func' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'default_plugin_handler_func' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>private</i> 'compile_dir' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'./templates_c/'</font> <i>(length=14)</i>
      <i>private</i> 'plugins_dir' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=1)</i>
          0 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/var/www/my/_/dez-view/smarty-3.1.27/libs/plugins/'</font> <i>(length=50)</i>
      <i>private</i> 'cache_dir' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'./cache/'</font> <i>(length=8)</i>
      <i>private</i> 'config_dir' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=1)</i>
          0 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'./configs/'</font> <i>(length=10)</i>
      <i>public</i> 'force_compile' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>public</i> 'compile_check' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
      <i>public</i> 'use_sub_dirs' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>public</i> 'allow_ambiguous_resources' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>public</i> 'merge_compiled_includes' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>public</i> 'inheritance_merge_compiled_includes' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
      <i>public</i> 'force_cache' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>public</i> 'left_delimiter' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'{'</font> <i>(length=1)</i>
      <i>public</i> 'right_delimiter' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'}'</font> <i>(length=1)</i>
      <i>public</i> 'security_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Security'</font> <i>(length=15)</i>
      <i>public</i> 'security_policy' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'php_handling' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>0</font>
      <i>public</i> 'allow_php_templates' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>public</i> 'direct_access_security' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
      <i>public</i> 'debugging' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>public</i> 'debugging_ctrl' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'NONE'</font> <i>(length=4)</i>
      <i>public</i> 'smarty_debug_id' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'SMARTY_DEBUG'</font> <i>(length=12)</i>
      <i>public</i> 'debug_tpl' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'error_reporting' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'get_used_tags' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>public</i> 'config_overwrite' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
      <i>public</i> 'config_booleanize' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
      <i>public</i> 'config_read_hidden' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>public</i> 'compile_locking' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
      <i>public</i> 'cache_locking' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>public</i> 'locking_timeout' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>10</font>
      <i>public</i> 'default_resource_type' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'file'</font> <i>(length=4)</i>
      <i>public</i> 'caching_type' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'file'</font> <i>(length=4)</i>
      <i>public</i> 'properties' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=0)</i>
          <i><font color='#888a85'>empty</font></i>
      <i>public</i> 'default_config_type' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'file'</font> <i>(length=4)</i>
      <i>public</i> 'source_objects' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=0)</i>
          <i><font color='#888a85'>empty</font></i>
      <i>public</i> 'template_objects' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=1)</i>
          './templates/#/var/www/my/_/dez-view/example/views/wrap.tpl##' <font color='#888a85'>=&gt;</font> 
            <b>object</b>(<i>Smarty_Internal_Template</i>)[<i>14</i>]
              <i>public</i> 'smarty' <font color='#888a85'>=&gt;</font> 
                <i>&</i><b>object</b>(<i>Smarty</i>)[<i>11</i>]
              <i>public</i> 'template_resource' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/var/www/my/_/dez-view/example/views/wrap.tpl'</font> <i>(length=45)</i>
              <i>public</i> 'templateId' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'./templates/#/var/www/my/_/dez-view/example/views/wrap.tpl##'</font> <i>(length=60)</i>
              <i>public</i> 'mustCompile' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
              <i>public</i> 'has_nocache_code' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
              <i>public</i> 'properties' <font color='#888a85'>=&gt;</font> 
                <b>array</b> <i>(size=7)</i>
                  'file_dependency' <font color='#888a85'>=&gt;</font> 
                    <b>array</b> <i>(size=1)</i>
                      '1f2925b96c5ae0a9e1972443d4e867c4accd2bdb' <font color='#888a85'>=&gt;</font> 
                        <b>array</b> <i>(size=3)</i>
                          0 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/var/www/my/_/dez-view/example/views/wrap.tpl'</font> <i>(length=45)</i>
                          1 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>1444226429</font>
                          2 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'file'</font> <i>(length=4)</i>
                  'nocache_hash' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'137989571156152580848776_52110747'</font> <i>(length=33)</i>
                  'tpl_function' <font color='#888a85'>=&gt;</font> 
                    <b>array</b> <i>(size=0)</i>
                      <i><font color='#888a85'>empty</font></i>
                  'variables' <font color='#888a85'>=&gt;</font> 
                    <b>array</b> <i>(size=1)</i>
                      'view' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>0</font>
                  'has_nocache_code' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                  'version' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'3.1.27'</font> <i>(length=6)</i>
                  'unifunc' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'content_56152580874905_08229558'</font> <i>(length=31)</i>
              <i>public</i> 'required_plugins' <font color='#888a85'>=&gt;</font> 
                <b>array</b> <i>(size=2)</i>
                  'compiled' <font color='#888a85'>=&gt;</font> 
                    <b>array</b> <i>(size=0)</i>
                      <i><font color='#888a85'>empty</font></i>
                  'nocache' <font color='#888a85'>=&gt;</font> 
                    <b>array</b> <i>(size=0)</i>
                      <i><font color='#888a85'>empty</font></i>
              <i>public</i> 'block_data' <font color='#888a85'>=&gt;</font> 
                <b>array</b> <i>(size=0)</i>
                  <i><font color='#888a85'>empty</font></i>
              <i>public</i> 'variable_filters' <font color='#888a85'>=&gt;</font> 
                <b>array</b> <i>(size=0)</i>
                  <i><font color='#888a85'>empty</font></i>
              <i>public</i> 'used_tags' <font color='#888a85'>=&gt;</font> 
                <b>array</b> <i>(size=0)</i>
                  <i><font color='#888a85'>empty</font></i>
              <i>public</i> 'allow_relative_path' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
              <i>public</i> '_capture_stack' <font color='#888a85'>=&gt;</font> 
                <b>array</b> <i>(size=2)</i>
                  0 <font color='#888a85'>=&gt;</font> 
                    <b>array</b> <i>(size=0)</i>
                      <i><font color='#888a85'>empty</font></i>
                  1 <font color='#888a85'>=&gt;</font> 
                    <b>array</b> <i>(size=0)</i>
                      <i><font color='#888a85'>empty</font></i>
              <i>public</i> 'cache_id' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
              <i>public</i> 'compile_id' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
              <i>public</i> 'caching' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
              <i>public</i> 'cache_lifetime' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>120</font>
              <i>public</i> 'template_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_Template'</font> <i>(length=24)</i>
              <i>public</i> 'tpl_vars' <font color='#888a85'>=&gt;</font> 
                <b>array</b> <i>(size=3)</i>
                  'SCRIPT_NAME' <font color='#888a85'>=&gt;</font> 
                    <b>object</b>(<i>Smarty_Variable</i>)[<i>12</i>]
                      <i>public</i> 'value' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/_/dez-view/example/simple.php'</font> <i>(length=30)</i>
                      <i>public</i> 'nocache' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                      <i>public</i> 'scope' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>0</font>
                  'view' <font color='#888a85'>=&gt;</font> 
                    <b>object</b>(<i>Smarty_Variable</i>)[<i>13</i>]
                      <i>public</i> 'value' <font color='#888a85'>=&gt;</font> 
                        <i>&</i><b>object</b>(<i>Dez\View\Engine\Smarty</i>)[<i>10</i>]
                      <i>public</i> 'nocache' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                      <i>public</i> 'scope' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>0</font>
                  'smarty' <font color='#888a85'>=&gt;</font> 
                    <b>object</b>(<i>Smarty_Variable</i>)[<i>15</i>]
                      <i>public</i> 'value' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
                      <i>public</i> 'nocache' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                      <i>public</i> 'scope' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>0</font>
              <i>public</i> 'parent' <font color='#888a85'>=&gt;</font> 
                <i>&</i><b>object</b>(<i>Smarty</i>)[<i>11</i>]
              <i>public</i> 'config_vars' <font color='#888a85'>=&gt;</font> 
                <b>array</b> <i>(size=0)</i>
                  <i><font color='#888a85'>empty</font></i>
              <i>public</i> 'source' <font color='#888a85'>=&gt;</font> 
                <b>object</b>(<i>Smarty_Template_Source</i>)[<i>17</i>]
                  <i>public</i> 'compiler_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_SmartyTemplateCompiler'</font> <i>(length=38)</i>
                  <i>public</i> 'template_lexer_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_Templatelexer'</font> <i>(length=29)</i>
                  <i>public</i> 'template_parser_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_Templateparser'</font> <i>(length=30)</i>
                  <i>public</i> 'uid' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'1f2925b96c5ae0a9e1972443d4e867c4accd2bdb'</font> <i>(length=40)</i>
                  <i>public</i> 'resource' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/var/www/my/_/dez-view/example/views/wrap.tpl'</font> <i>(length=45)</i>
                  <i>public</i> 'type' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'file'</font> <i>(length=4)</i>
                  <i>public</i> 'name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/var/www/my/_/dez-view/example/views/wrap.tpl'</font> <i>(length=45)</i>
                  <i>public</i> 'unique_resource' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
                  <i>public</i> 'filepath' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/var/www/my/_/dez-view/example/views/wrap.tpl'</font> <i>(length=45)</i>
                  <i>public</i> 'basename' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
                  <i>public</i> 'components' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
                  <i>public</i> 'handler' <font color='#888a85'>=&gt;</font> 
                    <b>object</b>(<i>Smarty_Internal_Resource_File</i>)[<i>16</i>]
                      <i>public</i> 'uncompiled' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                      <i>public</i> 'recompiled' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                      <i>public</i> 'handler' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
                      <i>public</i> 'compiler_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_SmartyTemplateCompiler'</font> <i>(length=38)</i>
                      <i>public</i> 'template_lexer_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_Templatelexer'</font> <i>(length=29)</i>
                      <i>public</i> 'template_parser_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_Templateparser'</font> <i>(length=30)</i>
                  <i>public</i> 'smarty' <font color='#888a85'>=&gt;</font> 
                    <i>&</i><b>object</b>(<i>Smarty</i>)[<i>11</i>]
                  <i>public</i> 'isConfig' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                  <i>public</i> 'uncompiled' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                  <i>public</i> 'recompiled' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                  <i>public</i> 'compileds' <font color='#888a85'>=&gt;</font> 
                    <b>array</b> <i>(size=0)</i>
                      <i><font color='#888a85'>empty</font></i>
                  <i>public</i> 'exists' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
                  <i>public</i> 'timestamp' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>1444226451</font>
              <i>public</i> 'cached' <font color='#888a85'>=&gt;</font> 
                <b>object</b>(<i>Smarty_Template_Cached</i>)[<i>18</i>]
                  <i>public</i> 'filepath' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'./cache/1f2925b96c5ae0a9e1972443d4e867c4accd2bdb.wrap.tpl.php'</font> <i>(length=61)</i>
                  <i>public</i> 'content' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
                  <i>public</i> 'timestamp' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>1444226432</font>
                  <i>public</i> 'exists' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
                  <i>public</i> 'valid' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                  <i>public</i> 'processed' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                  <i>public</i> 'handler' <font color='#888a85'>=&gt;</font> 
                    <b>object</b>(<i>Smarty_Internal_CacheResource_File</i>)[<i>19</i>]
                  <i>public</i> 'compile_id' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
                  <i>public</i> 'cache_id' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
                  <i>public</i> 'lock_id' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
                  <i>public</i> 'is_locked' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                  <i>public</i> 'source' <font color='#888a85'>=&gt;</font> 
                    <b>object</b>(<i>Smarty_Template_Source</i>)[<i>17</i>]
                      <i>public</i> 'compiler_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_SmartyTemplateCompiler'</font> <i>(length=38)</i>
                      <i>public</i> 'template_lexer_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_Templatelexer'</font> <i>(length=29)</i>
                      <i>public</i> 'template_parser_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_Templateparser'</font> <i>(length=30)</i>
                      <i>public</i> 'uid' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'1f2925b96c5ae0a9e1972443d4e867c4accd2bdb'</font> <i>(length=40)</i>
                      <i>public</i> 'resource' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/var/www/my/_/dez-view/example/views/wrap.tpl'</font> <i>(length=45)</i>
                      <i>public</i> 'type' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'file'</font> <i>(length=4)</i>
                      <i>public</i> 'name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/var/www/my/_/dez-view/example/views/wrap.tpl'</font> <i>(length=45)</i>
                      <i>public</i> 'unique_resource' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
                      <i>public</i> 'filepath' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/var/www/my/_/dez-view/example/views/wrap.tpl'</font> <i>(length=45)</i>
                      <i>public</i> 'basename' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
                      <i>public</i> 'components' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
                      <i>public</i> 'handler' <font color='#888a85'>=&gt;</font> 
                        <b>object</b>(<i>Smarty_Internal_Resource_File</i>)[<i>16</i>]
                          <i>public</i> 'uncompiled' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                          <i>public</i> 'recompiled' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                          <i>public</i> 'handler' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
                          <i>public</i> 'compiler_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_SmartyTemplateCompiler'</font> <i>(length=38)</i>
                          <i>public</i> 'template_lexer_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_Templatelexer'</font> <i>(length=29)</i>
                          <i>public</i> 'template_parser_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_Templateparser'</font> <i>(length=30)</i>
                      <i>public</i> 'smarty' <font color='#888a85'>=&gt;</font> 
                        <i>&</i><b>object</b>(<i>Smarty</i>)[<i>11</i>]
                      <i>public</i> 'isConfig' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                      <i>public</i> 'uncompiled' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                      <i>public</i> 'recompiled' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
                      <i>public</i> 'compileds' <font color='#888a85'>=&gt;</font> 
                        <b>array</b> <i>(size=0)</i>
                          <i><font color='#888a85'>empty</font></i>
                      <i>public</i> 'exists' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
                      <i>public</i> 'timestamp' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>1444226451</font>
              <i>public</i> 'compiled' <font color='#888a85'>=&gt;</font> 
                <b>object</b>(<i>Smarty_Template_Compiled</i>)[<i>20</i>]
                  <i>public</i> 'filepath' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'./templates_c/1f2925b96c5ae0a9e1972443d4e867c4accd2bdb_0.file.wrap.tpl.cache.php'</font> <i>(length=80)</i>
                  <i>public</i> 'timestamp' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>1444226453</font>
                  <i>public</i> 'exists' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
                  <i>public</i> 'processed' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
                  <i>public</i> 'code' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
                  <i>public</i> 'unifunc' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'content_56152580874905_08229558'</font> <i>(length=31)</i>
      <i>public</i> 'resource_caching' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>public</i> 'template_resource_caching' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
      <i>public</i> 'cache_modified_check' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>public</i> 'registered_plugins' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=0)</i>
          <i><font color='#888a85'>empty</font></i>
      <i>public</i> 'plugin_search_order' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=4)</i>
          0 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'function'</font> <i>(length=8)</i>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'block'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'compiler'</font> <i>(length=8)</i>
          3 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'class'</font> <i>(length=5)</i>
      <i>public</i> 'registered_objects' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=0)</i>
          <i><font color='#888a85'>empty</font></i>
      <i>public</i> 'registered_classes' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=0)</i>
          <i><font color='#888a85'>empty</font></i>
      <i>public</i> 'registered_filters' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=0)</i>
          <i><font color='#888a85'>empty</font></i>
      <i>public</i> 'registered_resources' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=0)</i>
          <i><font color='#888a85'>empty</font></i>
      <i>public</i> '_resource_handlers' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=1)</i>
          'file' <font color='#888a85'>=&gt;</font> 
            <b>object</b>(<i>Smarty_Internal_Resource_File</i>)[<i>16</i>]
              <i>public</i> 'uncompiled' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
              <i>public</i> 'recompiled' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
              <i>public</i> 'handler' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
              <i>public</i> 'compiler_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_SmartyTemplateCompiler'</font> <i>(length=38)</i>
              <i>public</i> 'template_lexer_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_Templatelexer'</font> <i>(length=29)</i>
              <i>public</i> 'template_parser_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_Templateparser'</font> <i>(length=30)</i>
      <i>public</i> 'registered_cache_resources' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=0)</i>
          <i><font color='#888a85'>empty</font></i>
      <i>public</i> '_cacheresource_handlers' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=1)</i>
          'file' <font color='#888a85'>=&gt;</font> 
            <b>object</b>(<i>Smarty_Internal_CacheResource_File</i>)[<i>19</i>]
      <i>public</i> 'autoload_filters' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=0)</i>
          <i><font color='#888a85'>empty</font></i>
      <i>public</i> 'default_modifiers' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=0)</i>
          <i><font color='#888a85'>empty</font></i>
      <i>public</i> 'escape_html' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>public</i> 'start_time' <font color='#888a85'>=&gt;</font> <small>float</small> <font color='#f57900'>1444226453.1199</font>
      <i>public</i> '_file_perms' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>420</font>
      <i>public</i> '_dir_perms' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>505</font>
      <i>public</i> '_tag_stack' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=0)</i>
          <i><font color='#888a85'>empty</font></i>
      <i>public</i> '_current_file' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/var/www/my/_/dez-view/example/views/wrap.tpl'</font> <i>(length=45)</i>
      <i>public</i> '_parserdebug' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>public</i> '_is_file_cache' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=2)</i>
          '/var/www/my/_/dez-view/smarty-3.1.27/libs/sysplugins/smarty_internal_smartytemplatecompiler.php' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
          '/var/www/my/_/dez-view/smarty-3.1.27/libs/sysplugins/smarty_internal_compile_private_print_expression.php' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
      <i>public</i> 'cache_id' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'compile_id' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'caching' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
      <i>public</i> 'cache_lifetime' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>120</font>
      <i>public</i> 'template_class' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Smarty_Internal_Template'</font> <i>(length=24)</i>
      <i>public</i> 'tpl_vars' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=1)</i>
          'view' <font color='#888a85'>=&gt;</font> 
            <b>object</b>(<i>Smarty_Variable</i>)[<i>13</i>]
              <i>public</i> 'value' <font color='#888a85'>=&gt;</font> 
                <i>&</i><b>object</b>(<i>Dez\View\Engine\Smarty</i>)[<i>10</i>]
              <i>public</i> 'nocache' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
              <i>public</i> 'scope' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>0</font>
      <i>public</i> 'parent' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
      <i>public</i> 'config_vars' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=0)</i>
          <i><font color='#888a85'>empty</font></i>
  <i>protected</i> 'view' <font color='#888a85'>=&gt;</font> 
    <b>object</b>(<i>Dez\View\View</i>)[<i>7</i>]
      <i>protected</i> 'rendered' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
      <i>protected</i> 'engines' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=3)</i>
          '.php' <font color='#888a85'>=&gt;</font> 
            <b>object</b>(<i>Dez\View\Engine\Php</i>)[<i>8</i>]
              <i>protected</i> 'view' <font color='#888a85'>=&gt;</font> 
                <i>&</i><b>object</b>(<i>Dez\View\View</i>)[<i>7</i>]
              <i>protected</i> 'data' <font color='#888a85'>=&gt;</font> 
                <b>array</b> <i>(size=0)</i>
                  <i><font color='#888a85'>empty</font></i>
              <i>protected</i> 'sections' <font color='#888a85'>=&gt;</font> 
                <b>array</b> <i>(size=6)</i>
                  'content' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;div style=&quot;border: 2px solid red;  padding: 10px; margin: 10px;&quot;&gt;&#10;    &lt;pre&gt;Dez\View\Engine\Php&lt;/pre&gt;&#10;    &#10;&#10;&#10;&#10;&#10;&#10;&#10;&lt;h1&gt;&#10;    users&#10;&lt;/h1&gt;&#10;&lt;h3&gt;&#10;    content users.php&#10;&lt;/h3&gt;&#10;&lt;hr&gt;&#10;&lt;div&gt;&#10;    &lt;h1&gt;Content from /var/www/my/_/dez-view/example/simple.php&lt;/h1&gt;&lt;/div&gt;&#10;    &#10;&lt;/div&gt;'</font> <i>(length=263)</i>
                  'footer' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;div style=&quot;background: #ccc; padding: 20px 30px;&quot;&gt;&lt;i&gt;dev-view 2015 =)&lt;/i&gt;&lt;/div&gt;&#10;'</font> <i>(length=81)</i>
                  'header' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;div&gt;&lt;i&gt;&lt;b&gt;prepend&lt;/b&gt;&lt;/i&gt;&lt;/div&gt;&#10;&lt;header&gt;&#10;    &lt;h1&gt;Header&lt;/h1&gt;&#10;&lt;/header&gt;&#10;&lt;div&gt;&lt;i&gt;append&lt;/i&gt;&lt;/div&gt;&#10;'</font> <i>(length=97)</i>
                  'left-sidebar' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;div class=&quot;left-sidebar&quot;&gt;&#10;    &lt;ul&gt;&#10;        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link 1&lt;/a&gt;&lt;/li&gt;&#10;        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link 2&lt;/a&gt;&lt;/li&gt;&#10;        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link 3&lt;/a&gt;&lt;/li&gt;&#10;    &lt;/ul&gt;&#10;&lt;/div&gt;&#10;'</font> <i>(length=173)</i>
                  'test' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&lt;h4&gt;test&lt;/h4&gt;&#10;&#10;&#10;&lt;div style=&quot;background: #ccc; padding: 20px 30px;&quot;&gt;&lt;i&gt;dev-view 2015 =)&lt;/i&gt;&lt;/div&gt;&#10;&lt;br&gt;---------&lt;br&gt;&#10;&lt;i&gt;&lt;h5&gt;inner test&lt;/h5&gt;&lt;/i&gt;&#10;&#10;&#10;&#10;    &lt;div style=&quot;border: 2px solid red;  padding: 10px; margin: 10px;&quot;&gt;&#10;        section test&#10;    &lt;/div&gt;&#10;        &lt;div style=&quot;border: 2px solid red;  padding: 10px; margin: 10px;&quot;&gt;&#10;        section test&#10;    &lt;/div&gt;&#10;    '</font> <i>(length=360)</i>
                  'test-inner' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;i&gt;&lt;h5&gt;inner test&lt;/h5&gt;&lt;/i&gt;&#10;'</font> <i>(length=27)</i>
          '.phtml' <font color='#888a85'>=&gt;</font> 
            <b>object</b>(<i>Dez\View\Engine\Php</i>)[<i>9</i>]
              <i>protected</i> 'view' <font color='#888a85'>=&gt;</font> 
                <i>&</i><b>object</b>(<i>Dez\View\View</i>)[<i>7</i>]
              <i>protected</i> 'data' <font color='#888a85'>=&gt;</font> 
                <b>array</b> <i>(size=0)</i>
                  <i><font color='#888a85'>empty</font></i>
              <i>protected</i> 'sections' <font color='#888a85'>=&gt;</font> 
                <b>array</b> <i>(size=1)</i>
                  'content' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;div style=&quot;border: 2px solid red;  padding: 10px; margin: 10px;&quot;&gt;&#10;    &lt;pre&gt;Dez\View\Engine\Php&lt;/pre&gt;&#10;    &lt;div style=&quot;border: 2px solid red;  padding: 10px; margin: 10px;&quot;&gt;&#10;    &lt;pre&gt;Dez\View\Engine\Php&lt;/pre&gt;&#10;    &#10;&#10;&#10;&#10;&#10;&#10;&#10;&lt;h1&gt;&#10;    users&#10;&lt;/h1&gt;&#10;&lt;h3&gt;&#10;    content users.php&#10;&lt;/h3&gt;&#10;&lt;hr&gt;&#10;&lt;div&gt;&#10;    &lt;h1&gt;Content from /var/www/my/_/dez-view/example/simple.php&lt;/h1&gt;&lt;/div&gt;&#10;    &#10;&lt;/div&gt;&#10;    &#10;&lt;/div&gt;'</font> <i>(length=381)</i>
          '.tpl' <font color='#888a85'>=&gt;</font> 
            <i>&</i><b>object</b>(<i>Dez\View\Engine\Smarty</i>)[<i>10</i>]
      <i>protected</i> 'loadedEngines' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
      <i>protected</i> 'data' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=0)</i>
          <i><font color='#888a85'>empty</font></i>
      <i>protected</i> 'viewDirectory' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/var/www/my/_/dez-view/example/views'</font> <i>(length=36)</i>
      <i>protected</i> 'layouts' <font color='#888a85'>=&gt;</font> 
        <b>array</b> <i>(size=5)</i>
          0 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'wrap.php'</font> <i>(length=8)</i>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'wrap.tpl'</font> <i>(length=8)</i>
          2 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'wrap.phtml'</font> <i>(length=10)</i>
          3 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'wrap.php'</font> <i>(length=8)</i>
          4 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'wrap.php'</font> <i>(length=8)</i>
      <i>protected</i> 'layout' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'layout.php'</font> <i>(length=10)</i>
      <i>protected</i> 'content' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;div style=&quot;border: 2px solid red;  padding: 10px; margin: 10px;&quot;&gt;&#10;    &lt;pre&gt;Dez\View\Engine\Php&lt;/pre&gt;&#10;    &lt;div style=&quot;border: 2px solid red;  padding: 10px; margin: 10px;&quot;&gt;&#10;    &lt;pre&gt;Dez\View\Engine\Php&lt;/pre&gt;&#10;    &lt;div style=&quot;border: 2px solid red;  padding: 10px; margin: 10px;&quot;&gt;&#10;    &lt;pre&gt;Dez\View\Engine\Php&lt;/pre&gt;&#10;    &#10;&#10;&#10;&#10;&#10;&#10;&#10;&lt;h1&gt;&#10;    users&#10;&lt;/h1&gt;&#10;&lt;h3&gt;&#10;    content users.php&#10;&lt;/h3&gt;&#10;&lt;hr&gt;&#10;&lt;div&gt;&#10;    &lt;h1&gt;Content from /var/www/my/_/dez-view/example/simple.php&lt;/h1&gt;&lt;/div&gt;&#10;    &#10;&lt;/div&gt;&#10;    &#10;&lt;/div&gt;&lt;/div&gt;'</font> <i>(length=493)</i>
      <i>protected</i> 'dependencyInjector' <font color='#888a85'>=&gt;</font> 
        <b>object</b>(<i>Dez\DependencyInjection\Container</i>)[<i>2</i>]
          <i>protected</i> 'services' <font color='#888a85'>=&gt;</font> 
            <b>array</b> <i>(size=2)</i>
              'eventDispatcher' <font color='#888a85'>=&gt;</font> 
                <b>object</b>(<i>Dez\DependencyInjection\Service</i>)[<i>4</i>]
                  <i>protected</i> 'name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'eventDispatcher'</font> <i>(length=15)</i>
                  <i>protected</i> 'definition' <font color='#888a85'>=&gt;</font> 
                    <b>object</b>(<i>Closure</i>)[<i>3</i>]
                  <i>protected</i> 'resolved' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>false</font>
              'view' <font color='#888a85'>=&gt;</font> 
                <b>object</b>(<i>Dez\DependencyInjection\Service</i>)[<i>6</i>]
                  <i>protected</i> 'name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'view'</font> <i>(length=4)</i>
                  <i>protected</i> 'definition' <font color='#888a85'>=&gt;</font> 
                    <b>object</b>(<i>Closure</i>)[<i>5</i>]
                  <i>protected</i> 'resolved' <font color='#888a85'>=&gt;</font> <small>boolean</small> <font color='#75507b'>true</font>
          <i>protected</i> 'instances' <font color='#888a85'>=&gt;</font> 
            <b>array</b> <i>(size=1)</i>
              'view' <font color='#888a85'>=&gt;</font> 
                <i>&</i><b>object</b>(<i>Dez\View\View</i>)[<i>7</i>]
  <i>protected</i> 'data' <font color='#888a85'>=&gt;</font> 
    <b>array</b> <i>(size=0)</i>
      <i><font color='#888a85'>empty</font></i>
  <i>protected</i> 'sections' <font color='#888a85'>=&gt;</font> 
    <b>array</b> <i>(size=1)</i>
      'content' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;div style=&quot;border: 2px solid red;  padding: 10px; margin: 10px;&quot;&gt;&#10;    &lt;pre&gt;Dez\View\Engine\Php&lt;/pre&gt;&#10;    &lt;div style=&quot;border: 2px solid red;  padding: 10px; margin: 10px;&quot;&gt;&#10;    &lt;pre&gt;Dez\View\Engine\Php&lt;/pre&gt;&#10;    &lt;div style=&quot;border: 2px solid red;  padding: 10px; margin: 10px;&quot;&gt;&#10;    &lt;pre&gt;Dez\View\Engine\Php&lt;/pre&gt;&#10;    &#10;&#10;&#10;&#10;&#10;&#10;&#10;&lt;h1&gt;&#10;    users&#10;&lt;/h1&gt;&#10;&lt;h3&gt;&#10;    content users.php&#10;&lt;/h3&gt;&#10;&lt;hr&gt;&#10;&lt;div&gt;&#10;    &lt;h1&gt;Content from /var/www/my/_/dez-view/example/simple.php&lt;/h1&gt;&lt;/div&gt;&#10;    &#10;&lt;/div&gt;&#10;    &#10;&lt;/div&gt;&lt;/div&gt;'</font> <i>(length=493)</i>
</pre>
    <div style="border: 2px solid red;  padding: 10px; margin: 10px;">
    <pre>Dez\View\Engine\Php</pre>
    <div style="border: 2px solid red;  padding: 10px; margin: 10px;">
    <pre>Dez\View\Engine\Php</pre>
    <div style="border: 2px solid red;  padding: 10px; margin: 10px;">
    <pre>Dez\View\Engine\Php</pre>
    






<h1>
    users
</h1>
<h3>
    content users.php
</h3>
<hr>
<div>
    <h1>Content from /var/www/my/_/dez-view/example/simple.php</h1></div>
    
</div>
    
</div></div>


</div><?php }
}
?>