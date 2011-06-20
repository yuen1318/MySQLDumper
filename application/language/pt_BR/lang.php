<?php
/**
 * This file is part of MySQLDumper released under the GNU/GPL 2 license
 * http://www.mysqldumper.net
 *
 * @package       MySQLDumper
 * @subpackage    Language
 * @version       $Rev$
 * @author        $Author$
 */
$lang=array();
$lang['L_ACTION']="Action";
$lang['L_ACTIVATED']="ativado";
$lang['L_ACTUALLY_INSERTED_RECORDS']="até agora <b>%s</b> registros foram"
    ." adicionados com sucesso.";
$lang['L_ACTUALLY_INSERTED_RECORDS_OF']="Up to now  <b>%s</b> of <b>%s</b>"
    ." registros foram adicionados com"
    ." sucesso.";
$lang['L_ADD']="Add";
$lang['L_ADDED']="adicionado";
$lang['L_ADD_DB_MANUALLY']="Adicionar banco de dados manualmente";
$lang['L_ADD_RECIPIENT']="Add recipient";
$lang['L_ALL']="todos";
$lang['L_ANALYZE']="Analyze";
$lang['L_ANALYZING_TABLE']="<br />Agora a tabela '<b>%s</b>' está"
    ." sendo restaurada.<br /><br />";
$lang['L_ASKDBCOPY']="Você quer copiar o banco de dados"
    ." `%s` para o banco de dados `%s`?";
$lang['L_ASKDBDELETE']="Você quer excluir o banco de dados"
    ." `%s` com seu conteúdo?";
$lang['L_ASKDBEMPTY']="Você quer esvaziar o banco de dados"
    ." `%s` ?";
$lang['L_ASKDELETEFIELD']="Você quer excluir o campo?";
$lang['L_ASKDELETERECORD']="Você tem certeza em apagar este"
    ." registro?";
$lang['L_ASKDELETETABLE']="Deve a tabela `%s` ser excluida?";
$lang['L_ASKTABLEEMPTY']="Deve a tabela `%s` ser esvaziada?";
$lang['L_ASKTABLEEMPTYKEYS']="Deve a tabela `%s` ser esvaziada e os"
    ." índices reiniciados?";
$lang['L_ATTACHED_AS_FILE']="attached as file";
$lang['L_ATTACH_BACKUP']="Anexar o backup";
$lang['L_AUTHENTICATE']="Login information";
$lang['L_AUTHORIZE']="Authorize";
$lang['L_AUTODELETE']="Excluir backups automaticamente";
$lang['L_BACK']="voltar";
$lang['L_BACKUPFILESANZAHL']="No diretório de backup há";
$lang['L_BACKUPS']="Backups";
$lang['L_BACKUP_DBS']="DBs to backup";
$lang['L_BACKUP_TABLE_DONE']="Dumping of table `%s` finished. %s"
    ." records have been saved.";
$lang['L_BACK_TO_OVERVIEW']="Visão geral do banco de dados";
$lang['L_CALL']="Call";
$lang['L_CANCEL']="Cancel";
$lang['L_CANT_CREATE_DIR']="Não foi possível criar o diretório"
    ." '%s'. <br />Por favor utilize seu"
    ." programa de FTP.";
$lang['L_CHANGE']="alterar";
$lang['L_CHANGEDIR']="Mudando para o diretório";
$lang['L_CHANGEDIRERROR']="Não pude mudar de diretório!";
$lang['L_CHARSET']="Conjunto de caracteres";
$lang['L_CHARSETS']="Character Sets";
$lang['L_CHECK']="Verificar";
$lang['L_CHECK_DIRS']="Verificar meus diretórios";
$lang['L_CHOOSE_CHARSET']="MySQLDumper couldn't detect the"
    ." encoding of the backup file"
    ." automatically.<br /><br />You must"
    ." choose the charset with which this"
    ." backup was saved.<br /><br />If you"
    ." discover any problems with some"
    ." characters after restoring, you can"
    ." repeat the backup-progress and then"
    ." choose another character set.<br /><br"
    ." />Good luck. ;)<br /><br />";
$lang['L_CHOOSE_DB']="Escolher banco de dados";
$lang['L_CLEAR_DATABASE']="Limpar banco de dados";
$lang['L_CLOSE']="Close";
$lang['L_COLLATION']="Collation";
$lang['L_COMMAND']="Comando";
$lang['L_COMMAND_AFTER_BACKUP']="Command after backup";
$lang['L_COMMAND_BEFORE_BACKUP']="Command before backup";
$lang['L_COMMENT']="Comentário";
$lang['L_COMPRESSED']="compactado (gz)";
$lang['L_CONFBASIC']="Parâmetros básicos";
$lang['L_CONFIG']="Configuração";
$lang['L_CONFIGFILE']="Config File";
$lang['L_CONFIGFILES']="Configuration Files";
$lang['L_CONFIGURATIONS']="Configurations";
$lang['L_CONFIG_AUTODELETE']="Autoexcluir";
$lang['L_CONFIG_CRONPERL']="Configurações do Crondump para o"
    ." script Perl";
$lang['L_CONFIG_EMAIL']="Notificação por email";
$lang['L_CONFIG_FTP']="Transferência via FTP do arquivo de"
    ." backup";
$lang['L_CONFIG_HEADLINE']="Configuração";
$lang['L_CONFIG_INTERFACE']="Interface";
$lang['L_CONFIG_LOADED']="Configuration \"%s\" has been imported"
    ." successfully.";
$lang['L_CONFIRM_CONFIGFILE_DELETE']="Really delete the configuration file"
    ." %s?";
$lang['L_CONFIRM_DELETE_FILE']="Should the file '%s' really be"
    ." deleted?";
$lang['L_CONFIRM_DELETE_TABLES']="Really delete the selected tables?";
$lang['L_CONFIRM_DROP_DATABASES']="Should the selected databases really"
    ." be deleted?<br /><br />Attention: all"
    ." data will be deleted! Maybe you should"
    ." create a backup first.";
$lang['L_CONFIRM_RECIPIENT_DELETE']="Should the recipient \"%s\" really be"
    ." deleted?";
$lang['L_CONFIRM_TRUNCATE_DATABASES']="Should all tables of the selected"
    ." databases really be deleted?<br /><br"
    ." />Attention: all data will be deleted!"
    ." Maybe you want to create a backup"
    ." first.";
$lang['L_CONFIRM_TRUNCATE_TABLES']="Really empty the selected tables?";
$lang['L_CONNECT']="conectar";
$lang['L_CONNECTIONPARS']="Parâmetros de conexão";
$lang['L_CONNECTTOMYSQL']="Conectar ao MySQL";
$lang['L_CONTINUE_MULTIPART_RESTORE']="Continue Multipart-Restore with next"
    ." file '%s'.";
$lang['L_CONVERTED_FILES']="Converted Files";
$lang['L_CONVERTER']="Conversor de backup";
$lang['L_CONVERTING']="Convertendo";
$lang['L_CONVERT_FILE']="Arquivo a ser convertido";
$lang['L_CONVERT_FILENAME']="Nome do arquivo de destino (sem"
    ." extensão)";
$lang['L_CONVERT_FILEREAD']="Ler arquivo '%s'";
$lang['L_CONVERT_FINISHED']="Conversão terminada, o arquivo '%s'"
    ." foi gravado com sucesso.";
$lang['L_CONVERT_START']="Iniciar a conversão";
$lang['L_CONVERT_TITLE']="Converter o dump para o formato MSD";
$lang['L_CONVERT_WRONG_PARAMETERS']="Parâmetros incorretos!  A conversão"
    ." não é possível.";
$lang['L_CREATE']="Criar";
$lang['L_CREATED']="Created";
$lang['L_CREATEDIRS']="Criar diretórios";
$lang['L_CREATE_AUTOINDEX']="Criar um Auto-índice";
$lang['L_CREATE_CONFIGFILE']="Create a new configuration file";
$lang['L_CREATE_DATABASE']="Criar novo banco de dados";
$lang['L_CREATE_TABLE_SAVED']="Definition of table `%s` saved.";
$lang['L_CREDITS']="Créditos / Ajuda";
$lang['L_CRONSCRIPT']="Cronscript";
$lang['L_CRON_COMMENT']="Digitar comentário";
$lang['L_CRON_COMPLETELOG']="Registrar todas as saídas";
$lang['L_CRON_EXECPATH']="Caminho dos scripts Perl";
$lang['L_CRON_EXTENDER']="Extensão do arquivo";
$lang['L_CRON_PRINTOUT']="Imprimir a saída na tela.";
$lang['L_CSVOPTIONS']="Opções de CSV";
$lang['L_CSV_EOL']="Separar linhas com";
$lang['L_CSV_ERRORCREATETABLE']="Erro durante a criação da tabela"
    ." `%s` !";
$lang['L_CSV_FIELDCOUNT_NOMATCH']="A contagem de campos não confere com"
    ." a dos dados a importar (%d ao invés"
    ." de %d).";
$lang['L_CSV_FIELDSENCLOSED']="Campos fechados por";
$lang['L_CSV_FIELDSEPERATE']="Campos separados por";
$lang['L_CSV_FIELDSESCAPE']="Campos escapados com";
$lang['L_CSV_FIELDSLINES']="%d campos reconhecidos, totalizando %d"
    ." linhas";
$lang['L_CSV_FILEOPEN']="Abrir arquivo CSV";
$lang['L_CSV_NAMEFIRSTLINE']="Nome dos campos na primeira linha";
$lang['L_CSV_NODATA']="Nenhum dado encontrado para"
    ." importação!";
$lang['L_CSV_NULL']="Substituir NULL com";
$lang['L_DATABASES_OF_USER']="Databases of user";
$lang['L_DATABASE_CREATED_FAILED']="The database wasn't created.<br"
    ." />MySQL returns:<br/><br />%s";
$lang['L_DATABASE_CREATED_SUCCESS']="The database '%s' has been created"
    ." successfully.";
$lang['L_DATASIZE']="Size of data";
$lang['L_DATASIZE_INFO']="This is the size of the records - not"
    ." the size of the backup file";
$lang['L_DAY']="Day";
$lang['L_DAYS']="Days";
$lang['L_DB']="Banco de dados";
$lang['L_DBCONNECTION']="Conexão do banco de dados";
$lang['L_DBPARAMETER']="Parâmetros do banco de dados";
$lang['L_DBS']="Bancos de dados";
$lang['L_DB_ADAPTER']="DB-Adapter";
$lang['L_DB_BACKUPPARS']="Parâmetro de backup do banco de dados";
$lang['L_DB_DEFAULT']="Default database";
$lang['L_DB_HOST']="Host";
$lang['L_DB_IN_LIST']="O banco de dados '%s' não pode ser"
    ." adicionado pois ele já existe";
$lang['L_DB_NAME']="Nome do banco de dados";
$lang['L_DB_PASS']="Senha";
$lang['L_DB_SELECT_ERROR']="<br />Error:<br />Seleção do banco"
    ." de dados <b>";
$lang['L_DB_SELECT_ERROR2']="</b> falhou!";
$lang['L_DB_USER']="Usuáio";
$lang['L_DEFAULT_CHARACTER_SET_NAME']="Default character set";
$lang['L_DEFAULT_CHARSET']="Default character set";
$lang['L_DEFAULT_COLLATION_NAME']="Default collation";
$lang['L_DELETE']="Excluir";
$lang['L_DELETE_DATABASE']="Excluir banco de dados";
$lang['L_DELETE_FILE_ERROR']="Error deleting file \"%s\"!";
$lang['L_DELETE_FILE_SUCCESS']="File \"%s\" was deleted successfully.";
$lang['L_DELETE_HTACCESS']="Remover proteção de diretório"
    ." (apagar .htaccess)";
$lang['L_DESCRIPTION']="Description";
$lang['L_DESELECT_ALL']="Desselecionar tudo";
$lang['L_DIR']="Diretório";
$lang['L_DISABLEDFUNCTIONS']="Funções desativadas";
$lang['L_DO']="Executar";
$lang['L_DOCRONBUTTON']="Executar o script Perl Cron";
$lang['L_DONE']="Pronto!";
$lang['L_DONT_ATTACH_BACKUP']="Don't attach backup";
$lang['L_DOPERLTEST']="Testar módulos Perl";
$lang['L_DOSIMPLETEST']="Testar Perl";
$lang['L_DOWNLOAD_FILE']="Download file";
$lang['L_DO_NOW']="executar agora";
$lang['L_DUMP']="Criar backup";
$lang['L_DUMP_ENDERGEBNIS']="O arquivo contém <b>%s</b> tabela(s)"
    ." com <b>%s</b> registro(s).<br />";
$lang['L_DUMP_FILENAME']="Arquivo de backup";
$lang['L_DUMP_HEADLINE']="Criar backup...";
$lang['L_DUMP_NOTABLES']="Nenhuma tabela foi encontrada no banco"
    ." de dados `%s`";
$lang['L_DUMP_OF_DB_FINISHED']="Dumping of database `%s` done";
$lang['L_DURATION']="Duration";
$lang['L_EDIT']="editar";
$lang['L_EHRESTORE_CONTINUE']="continuar e registrar erros";
$lang['L_EHRESTORE_STOP']="parar";
$lang['L_EMAIL']="E-Mail";
$lang['L_EMAILBODY_ATTACH']="O anexo contém o backup do seu banco"
    ." de dados MySQL.<br />Backup do banco"
    ." de dados `%s`<br /><br /><br />O"
    ." seguinte arquivo foi criado:<br /><br"
    ." />%s <br /><br />Atenciosamente<br"
    ." /><br />MySQLDumper<br />";
$lang['L_EMAILBODY_FOOTER']="`<br /><br />Atenciosamente<br /><br"
    ." />MySQLDumper<br />";
$lang['L_EMAILBODY_MP_ATTACH']="Um backup Multi-parte foi criado.<br"
    ." />Os arquivos de backup estão"
    ." anexados em emails separados.<br"
    ." />Backup do banco de dados `%s`<br"
    ." /><br /><br />Os seguintes arquivos"
    ." foram criados:<br /><br />%s <br /><br"
    ." />Atenciosamente<br /><br"
    ." />MySQLDumper<br />";
$lang['L_EMAILBODY_MP_NOATTACH']="Um backup Multi-parte foi criad.<br"
    ." />Os arquivos não estão anexados a"
    ." este email!<br />Backup do banco de"
    ." dados `%s`<br /><br /><br />Os"
    ." seguintes arquivos foram criados:<br"
    ." /><br />%s<br /><br /><br"
    ." />Atenciosamente<br /><br"
    ." />MySQLDumper<br />";
$lang['L_EMAILBODY_NOATTACH']="Os arquivos não estão anexados a"
    ." este email!<br />Backup do banco de"
    ." dados `%s`<br /><br /><br />O seguinte"
    ." arquivo foi criado:<br /><br />%s<br"
    ." /><br /><br />Atenciosamente<br /><br"
    ." />MySQLDumper<br />";
$lang['L_EMAILBODY_TOOBIG']="O arquivo de backup excedeu o tamanho"
    ." máximo de %s e não foi anexado a"
    ." este email.<br />Backup do banco de"
    ." dados `%s`<br /><br /><br />O seguinte"
    ." arquivo foi criado:<br /><br />%s<br"
    ." /><br /><br />Atenciosamente<br /><br"
    ." />MySQLDumper<br />";
$lang['L_EMAIL_ADDRESS']="E-Mail-Address";
$lang['L_EMAIL_CC']="CC-Receiver";
$lang['L_EMAIL_MAXSIZE']="Tamanho máximo do anexo";
$lang['L_EMAIL_ONLY_ATTACHMENT']="... somente anexos.";
$lang['L_EMAIL_RECIPIENT']="Endereço do email";
$lang['L_EMAIL_SENDER']="Endereço do remetente do email";
$lang['L_EMAIL_START']="Starting to send e-mail";
$lang['L_EMAIL_WAS_SEND']="Um email foi enviado com sucesso para";
$lang['L_EMPTY']="Esvaziar";
$lang['L_EMPTYKEYS']="esvaziar e reiniciar os índices";
$lang['L_EMPTYTABLEBEFORE']="Esvaziar a tabela antes";
$lang['L_EMPTY_DB_BEFORE_RESTORE']="Excluir tabelas antes de restaurar";
$lang['L_ENCODING']="encoding";
$lang['L_ENCRYPTION_TYPE']="Tipo de encriptação";
$lang['L_ENGINE']="Engine";
$lang['L_ENTER_DB_INFO']="First click the button \"Connect to"
    ." MySQL\". Only if no database could be"
    ." detected you need to provide a"
    ." database name here.";
$lang['L_ENTRY']="Entrada";
$lang['L_ERROR']="Erro";
$lang['L_ERRORHANDLING_RESTORE']="Controle de erro durante a"
    ." restauração";
$lang['L_ERROR_CONFIGFILE_NAME']="Filename \"%s\" contains invalid"
    ." characters.";
$lang['L_ERROR_DELETING_CONFIGFILE']="Error: couldn't delete configuration"
    ." file %s!";
$lang['L_ERROR_LOADING_CONFIGFILE']="Couldn't load configfile \"%s\".";
$lang['L_ERROR_LOG']="Error Log";
$lang['L_ERROR_MULTIPART_RESTORE']="Multipart-Restore: couldn't finde the"
    ." next file '%s'!";
$lang['L_ESTIMATED_END']="Estimated end";
$lang['L_EXCEL2003']="Excel de 2003";
$lang['L_EXISTS']="Exists";
$lang['L_EXPORT']="Exportar";
$lang['L_EXPORTFINISHED']="Exportação finalizada.";
$lang['L_EXPORTLINES']="<strong>%s</strong> linhas exportadas";
$lang['L_EXPORTOPTIONS']="Opções de exportação";
$lang['L_EXTENDEDPARS']="Parâmetros extendidos";
$lang['L_FADE_IN_OUT']="Exibir sim/não";
$lang['L_FATAL_ERROR_DUMP']="Fatal error: the CREATE-Statement of"
    ." table '%s' in database '%s' couldn't"
    ." be read!";
$lang['L_FIELDS']="campos";
$lang['L_FIELDS_OF_TABLE']="Fields of table";
$lang['L_FILE']="Arquivo";
$lang['L_FILES']="Files";
$lang['L_FILESIZE']="Tamanho do arquivo";
$lang['L_FILE_MANAGE']="Administração de arquivos";
$lang['L_FILE_OPEN_ERROR']="Erro: não pude abrir o arquivo.";
$lang['L_FILE_SAVED_SUCCESSFULLY']="The file has been saved successfully.";
$lang['L_FILE_SAVED_UNSUCCESSFULLY']="The file couldn't be saved!";
$lang['L_FILE_UPLOAD_SUCCESSFULL']="The file '%s' was uploaded"
    ." successfully.";
$lang['L_FILTER_BY']="Filter by";
$lang['L_FM_ALERTRESTORE1']="Deve o banco de dados";
$lang['L_FM_ALERTRESTORE2']="ser restaurado com os rgistros do"
    ." arquivo";
$lang['L_FM_ALERTRESTORE3']="?";
$lang['L_FM_ALL_BU']="Todos os backups";
$lang['L_FM_ANZ_BU']="Backups";
$lang['L_FM_ASKDELETE1']="Deve o arquivo";
$lang['L_FM_ASKDELETE2']="realmente ser excluido?";
$lang['L_FM_ASKDELETE3']="Você deseja que a autoexclusão seja"
    ." executada com as regras configuradas"
    ." agora?";
$lang['L_FM_ASKDELETE4']="Você deseja excluir todos os arqruvos"
    ." de backup?";
$lang['L_FM_ASKDELETE5']="Você deseja excluir todos os arqruvos"
    ." de backup com";
$lang['L_FM_ASKDELETE5_2']="* ?";
$lang['L_FM_AUTODEL1']="Autoexclusão: os seguintes arqruivos"
    ." foram excluidos devido ao ajuste de"
    ." número máximo de arquivos:";
$lang['L_FM_CHOOSE_ENCODING']="Choose encoding of backup file";
$lang['L_FM_COMMENT']="Digitar comentário";
$lang['L_FM_DELETE']="Excluir";
$lang['L_FM_DELETE1']="O arquivo";
$lang['L_FM_DELETE2']="foi excluido com sucesso.";
$lang['L_FM_DELETE3']="não pode ser excluido!";
$lang['L_FM_DELETEALL']="Excluir todos os arqruvos de backup";
$lang['L_FM_DELETEALLFILTER']="Excluir todos com";
$lang['L_FM_DELETEAUTO']="Executar a autoexclusão manualmente";
$lang['L_FM_DUMPSETTINGS']="Configuração do script";
$lang['L_FM_DUMP_HEADER']="Backup";
$lang['L_FM_FILEDATE']="Data do arquivo";
$lang['L_FM_FILES1']="Backups do banco de dados";
$lang['L_FM_FILESIZE']="Tamanho do arquivo";
$lang['L_FM_FILEUPLOAD']="Enviar arquivo";
$lang['L_FM_FREESPACE']="Espaço livre no servidor";
$lang['L_FM_LAST_BU']="Último backup";
$lang['L_FM_NOFILE']="Você não escolheu nenhum arquivo!";
$lang['L_FM_NOFILESFOUND']="Nenhum arquivo encontrado.";
$lang['L_FM_RECORDS']="Registros";
$lang['L_FM_RESTORE']="Restaurar";
$lang['L_FM_RESTORE_HEADER']="Restaurar o banco de dados"
    ." `<strong>%s</strong>`";
$lang['L_FM_SELECTTABLES']="Selecionar tabelas";
$lang['L_FM_STARTDUMP']="Iniciar novo backup";
$lang['L_FM_TABLES']="Tabelas";
$lang['L_FM_TOTALSIZE']="Tamanho total";
$lang['L_FM_UPLOADFAILED']="O envio falhou!";
$lang['L_FM_UPLOADFILEEXISTS']="Um arquivo com o mesmo nome já existe"
    ." !";
$lang['L_FM_UPLOADFILEREQUEST']="favor escolher um arquivo.";
$lang['L_FM_UPLOADMOVEERROR']="Não pude mover os arqruivos"
    ." selecionados para o diretório de"
    ." envio.";
$lang['L_FM_UPLOADNOTALLOWED1']="Este tipo de arquivo não é"
    ." suportado.";
$lang['L_FM_UPLOADNOTALLOWED2']="Os tipos válidos são: *.gz and"
    ." *.sql-files";
$lang['L_FOUND_DB']="bd localizado";
$lang['L_FROMFILE']="do arquivo";
$lang['L_FROMTEXTBOX']="da caixa de texto";
$lang['L_FTP']="FTP";
$lang['L_FTP_ADD_CONNECTION']="Add connection";
$lang['L_FTP_CHOOSE_MODE']="Modo de Transferência - FTP";
$lang['L_FTP_CONFIRM_DELETE']="Should this FTP-Connection really be"
    ." deleted?";
$lang['L_FTP_CONNECTION']="FTP-Connection";
$lang['L_FTP_CONNECTION_CLOSED']="FTP-Connection closed";
$lang['L_FTP_CONNECTION_DELETE']="Delete connection";
$lang['L_FTP_CONNECTION_ERROR']="The connection to server '%s' using"
    ." port %s couldn't be established";
$lang['L_FTP_CONNECTION_SUCCESS']="The connection to server '%s' using"
    ." port %s was established successfully";
$lang['L_FTP_DIR']="Diretório para upload";
$lang['L_FTP_FILE_TRANSFER_ERROR']="Transfer of file '%s' was faulty";
$lang['L_FTP_FILE_TRANSFER_SUCCESS']="The file '%s' was transferred"
    ." successfully";
$lang['L_FTP_LOGIN_ERROR']="Login as user '%s' was denied";
$lang['L_FTP_LOGIN_SUCCESS']="Login as user '%s' was successfull";
$lang['L_FTP_OK']="Conexão bem sucedida.";
$lang['L_FTP_PASS']="Senha";
$lang['L_FTP_PASSIVE']="usar modo passivo";
$lang['L_FTP_PASV_ERROR']="Switching to passive mode was"
    ." unsuccessful";
$lang['L_FTP_PASV_SUCCESS']="Switching to passive mode was"
    ." successfull";
$lang['L_FTP_PORT']="Porta";
$lang['L_FTP_SEND_TO']="to <strong>%s</strong><br /> into"
    ." <strong>%s</strong>";
$lang['L_FTP_SERVER']="Servidor";
$lang['L_FTP_SSL']="Conexão segura SSL FTP";
$lang['L_FTP_START']="Starting FTP transfer";
$lang['L_FTP_TIMEOUT']="Timeout da conexão";
$lang['L_FTP_TRANSFER']="Transferência via FTP";
$lang['L_FTP_USER']="Usuário";
$lang['L_FTP_USESSL']="usar conexão SSL";
$lang['L_GENERAL']="Geral";
$lang['L_GZIP']="Compressão gzip";
$lang['L_GZIP_COMPRESSION']="Compressão gzip";
$lang['L_HOME']="Início";
$lang['L_HOUR']="Hour";
$lang['L_HOURS']="Hours";
$lang['L_HTACC_ACTIVATE_REWRITE_ENGINE']="Ativar rewrite";
$lang['L_HTACC_ADD_HANDLER']="Adicionar handler";
$lang['L_HTACC_CONFIRM_DELETE']="Deve a proteção do diretório ser"
    ." gravada agora ?";
$lang['L_HTACC_CONTENT']="Conteúdo do arquivo";
$lang['L_HTACC_CREATE']="Criar proteção do diretório";
$lang['L_HTACC_CREATED']="A proteção do diretório foi criada.";
$lang['L_HTACC_CREATE_ERROR']="Houve um erro durante a criação da"
    ." proteção do diretório !<br />Favor"
    ." criar os 2 arquivos manualmente com o"
    ." seguinte conteúdo";
$lang['L_HTACC_CRYPT']="Crypt (Linux e Sistemas Unix)";
$lang['L_HTACC_DENY_ALLOW']="Negar / Permitir";
$lang['L_HTACC_DIR_LISTING']="Listar Diretórios";
$lang['L_HTACC_EDIT']="Editar o .htaccess";
$lang['L_HTACC_ERROR_DOC']="Documento de Erro";
$lang['L_HTACC_EXAMPLES']="Mais exemplos e documentação";
$lang['L_HTACC_EXISTS']="Já existe uma proteção do"
    ." diretório. Se você criar novas, as"
    ." antigas serão sobrescritas !";
$lang['L_HTACC_MAKE_EXECUTABLE']="Tornar executável";
$lang['L_HTACC_MD5']="MD5 (Linux e Sistemas Unix)";
$lang['L_HTACC_NO_ENCRYPTION']="texto plano, sem encriptação"
    ." (Windows)";
$lang['L_HTACC_NO_USERNAME']="Você tem que digitar um nome!";
$lang['L_HTACC_PROPOSED']="Urgentemente recomendado";
$lang['L_HTACC_REDIRECT']="Redirecionar";
$lang['L_HTACC_SCRIPT_EXEC']="Executar script";
$lang['L_HTACC_SHA1']="SHA1 (all Systems)";
$lang['L_HTACC_WARNING']="Atenção! As diretivas do .htaccess"
    ." afetam o comportamento do"
    ." navegador.<br />Com conteúdo"
    ." incorreto, as páginas podem ficar"
    ." inacessíveis.";
$lang['L_IMPORT']="Importar";
$lang['L_IMPORTIEREN']="Importar";
$lang['L_IMPORTOPTIONS']="Opções de importação";
$lang['L_IMPORTSOURCE']="Fonte da importação";
$lang['L_IMPORTTABLE']="Importar para a tabela";
$lang['L_IMPORT_NOTABLE']="Nenhuma tabela foi selecionada para"
    ." importação!";
$lang['L_IN']="em";
$lang['L_INDEX_SIZE']="Size of index";
$lang['L_INFO_ACTDB']="Banco de dados atual";
$lang['L_INFO_DATABASES']="Os seguintes bancos de dados estão no"
    ." seu servidor";
$lang['L_INFO_DBEMPTY']="O banco de dados está vazio !";
$lang['L_INFO_FSOCKOPEN_DISABLED']="On this server the PHP command"
    ." fsockopen() is disabled by the"
    ." server's configuration. Because of"
    ." this the automatic download of"
    ." language packs is not possible. To"
    ." bypass this, you can download packages"
    ." manually, extract them locally and"
    ." upload them to the directory"
    ." \"language\" of your MySQLDumper"
    ." installation. Afterwards the new"
    ." language pack is available on this"
    ." site.";
$lang['L_INFO_LASTUPDATE']="Última atualização";
$lang['L_INFO_LOCATION']="Sua localização é";
$lang['L_INFO_NODB']="O banco de dados não existe.";
$lang['L_INFO_NOPROCESSES']="nenhum processo em execução";
$lang['L_INFO_NOSTATUS']="nenhum estado disponível";
$lang['L_INFO_NOVARS']="nenhuma variável disponível";
$lang['L_INFO_OPTIMIZED']="otimizada";
$lang['L_INFO_RECORDS']="Registros";
$lang['L_INFO_SIZE']="tamanho";
$lang['L_INFO_SUM']="Total";
$lang['L_INSTALL']="Instalação";
$lang['L_INSTALLED']="Installed";
$lang['L_INSTALL_DB_DEFAULT']="Use as default database";
$lang['L_INSTALL_HELP_PORT']="(em branco = Porta padrão)";
$lang['L_INSTALL_HELP_SOCKET']="(em branco = Socket padrão)";
$lang['L_IS_WRITABLE']="Is writable";
$lang['L_KILL_PROCESS']="Stop process";
$lang['L_LANGUAGE']="Idioma";
$lang['L_LANGUAGE_NAME']="Portuguese - BR";
$lang['L_LASTBACKUP']="Último backup";
$lang['L_LOAD']="Usar config. padrão";
$lang['L_LOAD_DATABASE']="recarregar bancos de dados";
$lang['L_LOAD_FILE']="Load file";
$lang['L_LOG']="Log";
$lang['L_LOGFILENOTWRITABLE']="Não pude criar o arquivo de log !";
$lang['L_LOGFILES']="Logfiles";
$lang['L_LOGGED_IN']="Logged in";
$lang['L_LOGIN']="Login";
$lang['L_LOGIN_AUTOLOGIN']="Automatic login";
$lang['L_LOGIN_INVALID_USER']="Unknown combination of username and"
    ." password.";
$lang['L_LOGOUT']="Log out";
$lang['L_LOG_CREATED']="Log file created.";
$lang['L_LOG_DELETE']="excluir log";
$lang['L_LOG_MAXSIZE']="Maximum size of log files";
$lang['L_LOG_NOT_READABLE']="The log file '%s' does not exist or is"
    ." not readable.";
$lang['L_MAILERROR']="O envio do email falhou!";
$lang['L_MAILPROGRAM']="Programa de email";
$lang['L_MAXIMUM_LENGTH']="Maximum length";
$lang['L_MAXIMUM_LENGTH_EXPLAIN']="This is the maximum number of bytes"
    ." one character needs, when it is saved"
    ." to disk.";
$lang['L_MAXSIZE']="Tamanho máx.";
$lang['L_MAX_BACKUP_FILES_EACH2']="Para cada banco de dados";
$lang['L_MAX_EXECUTION_TIME']="Max execution time";
$lang['L_MAX_UPLOAD_SIZE']="Tamanho máximo de arquivo";
$lang['L_MAX_UPLOAD_SIZE_INFO']="Se o seu arquivo de dump é maior que"
    ." o limite mencionado acima, você deve"
    ." enviá-lo via FTP para o diretório"
    ." \"work/backup\".<br />Após fazer isso"
    ." você poderá escolhê-lo novamente"
    ." para iniciar o processo de"
    ." restauração.";
$lang['L_MEMORY']="Memory";
$lang['L_MENU_HIDE']="Hide menu";
$lang['L_MENU_SHOW']="Show menu";
$lang['L_MESSAGE']="Message";
$lang['L_MESSAGE_TYPE']="Message type";
$lang['L_MINUTE']="Minute";
$lang['L_MINUTES']="Minutes";
$lang['L_MOBILE_OFF']="Off";
$lang['L_MOBILE_ON']="On";
$lang['L_MODE_EASY']="Easy";
$lang['L_MODE_EXPERT']="Expert";
$lang['L_MSD_INFO']="Informação do dump MySQL";
$lang['L_MSD_MODE']="MySQLDumper-Mode";
$lang['L_MSD_VERSION']="MySQLDumper-Version";
$lang['L_MULTIDUMP']="Multidump";
$lang['L_MULTIDUMP_FINISHED']="Backup do(s) <b>%d</b> banco(s) de"
    ." dados pronto";
$lang['L_MULTIPART_ACTUAL_PART']="Actual Part";
$lang['L_MULTIPART_SIZE']="tamanho máximo do arquivo";
$lang['L_MULTI_PART']="Backup multi-parte";
$lang['L_MYSQLVARS']="Variáveis do MySQL";
$lang['L_MYSQL_CLIENT_VERSION']="MySQL-Client";
$lang['L_MYSQL_CONNECTION_ENCODING']="Standard encoding of MySQL-Server";
$lang['L_MYSQL_DATA']="MySQL-Data";
$lang['L_MYSQL_ROUTINE']="Routine";
$lang['L_MYSQL_ROUTINES']="Routinen";
$lang['L_MYSQL_ROUTINES_EXPLAIN']="Stored functions and procedures";
$lang['L_MYSQL_TABLES_EXPLAIN']="Tables have a defined column structure"
    ." in which one can save data (records)."
    ." Each record represents a row in the"
    ." table.";
$lang['L_MYSQL_VERSION']="MySQL-Version";
$lang['L_MYSQL_VERSION_TOO_OLD']="We are sorry: the installed"
    ." MySQL-Version %s is too old and can"
    ." not be used together with this version"
    ." of MySQLDumper. Please update your"
    ." MySQL-Version to at least version"
    ." %s.<br />As an alternative you could"
    ." install MySQLDumper version 1.24,"
    ." which is able to work together with"
    ." older MySQL-Versions. But you will"
    ." lose some of the new functions of"
    ." MySQLDumper in that case.<br />";
$lang['L_MYSQL_VIEW']="View";
$lang['L_MYSQL_VIEWS']="Views";
$lang['L_MYSQL_VIEWS_EXPLAIN']="Views show (filtered) recordsets of"
    ." one ore more tables but don't contain"
    ." own records.";
$lang['L_NAME']="Name";
$lang['L_NEW']="novo";
$lang['L_NEWTABLE']="nova tabela";
$lang['L_NEXT_AUTO_INCREMENT']="Next automatic index";
$lang['L_NEXT_AUTO_INCREMENT_SHORT']="Autoindex";
$lang['L_NO']="não";
$lang['L_NOFTPPOSSIBLE']="Você não tem alçada para funções"
    ." de FTP !";
$lang['L_NOGZPOSSIBLE']="Como Zlib não está instalado, você"
    ." não poderá usar as funções do"
    ." GZip!";
$lang['L_NONE']="nenhum";
$lang['L_NOREVERSE']="Entradas mais antigas primeiro";
$lang['L_NOTAVAIL']="<em>não disponível</em>";
$lang['L_NOTHING_TO_DO']="There is nothing to do.";
$lang['L_NOTICE']="Notice";
$lang['L_NOTICES']="Notices";
$lang['L_NOT_ACTIVATED']="não ativado";
$lang['L_NOT_SUPPORTED']="Este backup não suporta esta"
    ." função.";
$lang['L_NO_DB_FOUND']="Não pude encontrar nenhuma base de"
    ." dados automaticamente!<br />Por favor,"
    ." verifique os parâmetros de conexão e"
    ." coloque o nome de seu banco de dados"
    ." manualmente.";
$lang['L_NO_DB_FOUND_INFO']="A conexão com o banco de dados foi"
    ." estabelecida com sucesso.<br /><br"
    ." />Seus dados de usuário são válidos"
    ." e foram aceitos pelo Servidor"
    ." MySQL.<br /><br />Mas o MySQLDumper"
    ." não foi capaz de encontrar nenhuma"
    ." base de dados.<br /><br />A detecção"
    ." automática via script é bloqueada em"
    ." alguns servidores.<br /><br />Você"
    ." deve colocar seus dados do banco de"
    ." dados manualmente depois de terminada"
    ." a instalação.<br />Clique em"
    ." \"configurações\" \"Parâmetros de"
    ." Conexão - exibir\" e digite ali o"
    ." nome do banco de dados.";
$lang['L_NO_DB_SELECTED']="No database selected.";
$lang['L_NO_ENTRIES']="A tabela \"<b>%s</b>\" está vazia e"
    ." não contêm nenhuma entrada.";
$lang['L_NO_MSD_BACKUPFILE']="Backups de outros scripts";
$lang['L_NO_NAME_GIVEN']="You didn't enter a name.";
$lang['L_NR_OF_RECORDS']="Number of records";
$lang['L_NR_TABLES_OPTIMIZED']="%s tabelas foram otimizadas.";
$lang['L_NUMBER_OF_FILES_FORM']="Excluir pelo número de arquivos";
$lang['L_OF']="de";
$lang['L_OK']="OK";
$lang['L_OPTIMIZE']="Otimizar";
$lang['L_OPTIMIZE_TABLES']="Otimizar as tabelas antes do backup";
$lang['L_OPTIMIZE_TABLE_ERR']="Error optimizing table `%s`.";
$lang['L_OPTIMIZE_TABLE_SUCC']="Optimized table `%s` successfully.";
$lang['L_OS']="Operating system";
$lang['L_OVERHEAD']="Overhead";
$lang['L_PAGE']="Page";
$lang['L_PAGE_REFRESHS']="Pageviews";
$lang['L_PASS']="Senha";
$lang['L_PASSWORD']="Password";
$lang['L_PASSWORDS_UNEQUAL']="As senhas não são idênticas ou são"
    ." nulas !";
$lang['L_PASSWORD_REPEAT']="Password (repeat)";
$lang['L_PASSWORD_STRENGTH']="Password strength";
$lang['L_PERLOUTPUT1']="Entrada no crondump.pl para o"
    ." absolute_path_of_configdir";
$lang['L_PERLOUTPUT2']="URL para o navegador ou serviço Cron"
    ." externo";
$lang['L_PERLOUTPUT3']="Linha de comando no terminal para o"
    ." Crontab";
$lang['L_PERL_COMPLETELOG']="Perl-Complete-Log";
$lang['L_PERL_LOG']="Perl-Log";
$lang['L_PHPBUG']="Bug em zlib ! Não foi possível"
    ." comprimir!";
$lang['L_PHPMAIL']="PHP-Function mail()";
$lang['L_PHP_EXTENSIONS']="PHP-Extensions";
$lang['L_PHP_LOG']="PHP-Log";
$lang['L_PHP_VERSION']="PHP-Version";
$lang['L_PHP_VERSION_TOO_OLD']="We are sorry: the installed"
    ." PHP-Version is too old. MySQLDumper"
    ." needs a PHP-Version of %s or higher."
    ." This server has a PHP-Version of %s"
    ." which is too old. You need to update"
    ." your PHP-Version before you can"
    ." install and use MySQLDumper. <br />";
$lang['L_POP3_PORT']="POP3-Port";
$lang['L_POP3_SERVER']="POP3-Server";
$lang['L_PORT']="Porta";
$lang['L_POSITION_BC']="bottom center";
$lang['L_POSITION_BL']="bottom left";
$lang['L_POSITION_BR']="bottom right";
$lang['L_POSITION_MC']="center center";
$lang['L_POSITION_ML']="middle left";
$lang['L_POSITION_MR']="middle right";
$lang['L_POSITION_NOTIFICATIONS']="Position of notification window";
$lang['L_POSITION_TC']="top center";
$lang['L_POSITION_TL']="top left";
$lang['L_POSITION_TR']="top right";
$lang['L_POSSIBLE_COLLATIONS']="Possible collations";
$lang['L_POSSIBLE_COLLATIONS_EXPLAIN']="These are the possible collations one"
    ." can choose for this character set.<br"
    ." /><br />_cs = case sensitiv<br />_ci ="
    ." case insensitive";
$lang['L_PREFIX']="Prefixo";
$lang['L_PRIMARYKEYS_CHANGED']="Primary keys changed";
$lang['L_PRIMARYKEYS_CHANGINGERROR']="Error changing primary keys";
$lang['L_PRIMARYKEYS_SAVE']="Save primary keys";
$lang['L_PRIMARYKEY_CONFIRMDELETE']="Really delete primary key?";
$lang['L_PRIMARYKEY_DELETED']="Primary key deleted";
$lang['L_PRIMARYKEY_FIELD']="Primary key field";
$lang['L_PRIMARYKEY_NOTFOUND']="Primary key not found";
$lang['L_PROCESSKILL1']="O script tenta abortar o processo";
$lang['L_PROCESSKILL2']="para abortar.";
$lang['L_PROCESSKILL3']="O script tenta desde";
$lang['L_PROCESSKILL4']="sec. abortar o processo";
$lang['L_PROCESS_ID']="Process ID";
$lang['L_PROGRESS_FILE']="Progress file";
$lang['L_PROGRESS_OVER_ALL']="Progresso do todo";
$lang['L_PROGRESS_TABLE']="Progresso da tabela";
$lang['L_PROVIDER']="Provedor";
$lang['L_PROZESSE']="Processos";
$lang['L_QUERY']="Query";
$lang['L_RECHTE']="Permissões";
$lang['L_RECORDS']="Registros";
$lang['L_RECORDS_INSERTED']="<b>%s</b> registros inseridos.";
$lang['L_RECORDS_OF_TABLE']="Records of table";
$lang['L_RECORDS_PER_PAGECALL']="Records per pagecall";
$lang['L_REFRESHTIME']="Refresh time";
$lang['L_REFRESHTIME_PROCESSLIST']="Refreshing time of the process list";
$lang['L_REGISTRATION_DESCRIPTION']="Please enter the administrator account"
    ." now. You will login into MySQLDumper"
    ." with this user. Note the dates now"
    ." given good reason.<br /><br />You can"
    ." choose your username and password"
    ." free. Please make sure to choose the"
    ." safest possible combination of user"
    ." name and password to protect access to"
    ." MySQLDumper against unauthorized"
    ." access best!";
$lang['L_RELOAD']="Recarregar";
$lang['L_REMOVE']="Remove";
$lang['L_REPAIR']="Repair";
$lang['L_RESET']="Reiniciar";
$lang['L_RESET_SEARCHWORDS']="reiniciar pesquisa de palavras";
$lang['L_RESTORE']="Restaurar";
$lang['L_RESTORE_COMPLETE']="<b>%s</b> tabelas driadas.";
$lang['L_RESTORE_DB']="banco de dados '<b>%s</b>' em"
    ." '<b>%s</b>'.";
$lang['L_RESTORE_DB_COMPLETE_IN']="Restoring of database '%s' finished in"
    ." %s.";
$lang['L_RESTORE_OF_TABLES']="Choose tables to be restored";
$lang['L_RESTORE_TABLE']="Restoring of table '%s'";
$lang['L_RESTORE_TABLES_COMPLETED']="Até agora <b>%d</b> de <b>%d</b>"
    ." tabelas foram criadas.";
$lang['L_RESTORE_TABLES_COMPLETED0']="Até agora <b>%d</b> tabelas foram"
    ." criadas.";
$lang['L_REVERSE']="Últimas entradas primeiro";
$lang['L_SAFEMODEDESC']="Because PHP is running in safe_mode"
    ." you need to create the following"
    ." directories manually using your"
    ." FTP-Programm:";
$lang['L_SAVE']="Salvar";
$lang['L_SAVEANDCONTINUE']="Salvar e continuar a instalação";
$lang['L_SAVE_ERROR']="Erro - incapaz de salvar"
    ." configuração!";
$lang['L_SAVE_SUCCESS']="Configuration was saved succesfully"
    ." into configuration file \"%s\".";
$lang['L_SAVING_DATA_TO_FILE']="Saving data of database '%s' to file"
    ." '%s'";
$lang['L_SAVING_DATA_TO_MULTIPART_FILE']="Maximum filesize reached: proceeding"
    ." with file '%s'";
$lang['L_SAVING_DB_FORM']="Banco de dados";
$lang['L_SAVING_TABLE']="Salvando a tabela";
$lang['L_SEARCH_ACCESS_KEYS']="Navegação: para frente=ALT+V, para"
    ." trás=ALT+C";
$lang['L_SEARCH_IN_TABLE']="Pesquisar na tabela";
$lang['L_SEARCH_NO_RESULTS']="A pesquisa por \"<b>%s</b>\" na tabela"
    ." \"<b>%s</b>\" não trouxe nenhum"
    ." resultado!";
$lang['L_SEARCH_OPTIONS']="Opções de pesquisa";
$lang['L_SEARCH_OPTIONS_AND']="a coluna deve conter todas as palavras"
    ." a pesquisar (E-pesquisar)";
$lang['L_SEARCH_OPTIONS_CONCAT']="a linha deve conter todas as palavras"
    ." a pesquisar, mas elas podem estar em"
    ." qualquer coluna (pode levar algum"
    ." tempo)";
$lang['L_SEARCH_OPTIONS_OR']="a coluna deve conter uma das palavras"
    ." a pesquisar (OU-pesquisar)";
$lang['L_SEARCH_RESULTS']="A pesquisa por \"<b>%s</b>\" na tabela"
    ." \"<b>%s</b>\" levou aos seguintes"
    ." resultados";
$lang['L_SECOND']="Second";
$lang['L_SECONDS']="Seconds";
$lang['L_SELECT']="Select";
$lang['L_SELECTED_FILE']="Arquivo escolhido";
$lang['L_SELECT_ALL']="Selecionar tudo";
$lang['L_SELECT_FILE']="Select file";
$lang['L_SELECT_LANGUAGE']="Select language";
$lang['L_SENDMAIL']="Sendmail";
$lang['L_SENDRESULTASFILE']="enviar resultado como arquivo";
$lang['L_SEND_MAIL_FORM']="Enviar relatório por email";
$lang['L_SERVER']="Servidor";
$lang['L_SERVERCAPTION']="Exibir servidor";
$lang['L_SETPRIMARYKEYSFOR']="Set new primary keys for table";
$lang['L_SHOWING_ENTRY_X_TO_Y_OF_Z']="Showing entry %s to %s of %s";
$lang['L_SHOWRESULT']="exibir resultado";
$lang['L_SHOW_TABLES']="Show tables";
$lang['L_SHOW_TOOLTIPS']="Show nicer tooltips";
$lang['L_SMTP']="SMTP";
$lang['L_SMTP_HOST']="SMTP-Host";
$lang['L_SMTP_PORT']="SMTP-Port";
$lang['L_SOCKET']="Socket";
$lang['L_SPEED']="Speed";
$lang['L_SQLBOX']="SQL-Box";
$lang['L_SQLBOXHEIGHT']="Altura da caixa SQL";
$lang['L_SQLLIB_ACTIVATEBOARD']="ativar quadro";
$lang['L_SQLLIB_BOARDS']="Quadros";
$lang['L_SQLLIB_DEACTIVATEBOARD']="desativar quadro";
$lang['L_SQLLIB_GENERALFUNCTIONS']="funções gerais";
$lang['L_SQLLIB_RESETAUTO']="reiniciar o auto-incremento";
$lang['L_SQLLIMIT']="Quantidade de registros por página";
$lang['L_SQL_ACTIONS']="Ações";
$lang['L_SQL_AFTER']="após";
$lang['L_SQL_ALLOWDUPS']="Duplicidade permitida";
$lang['L_SQL_ATPOSITION']="inserir na posição";
$lang['L_SQL_ATTRIBUTES']="Atributos";
$lang['L_SQL_BACKDBOVERVIEW']="Voltar para Visão geral";
$lang['L_SQL_BEFEHLNEU']="Novo comando";
$lang['L_SQL_BEFEHLSAVED1']="Comando SQL";
$lang['L_SQL_BEFEHLSAVED2']="foi adicionada";
$lang['L_SQL_BEFEHLSAVED3']="foi salva";
$lang['L_SQL_BEFEHLSAVED4']="foi movida acima";
$lang['L_SQL_BEFEHLSAVED5']="foi excluida";
$lang['L_SQL_BROWSER']="Navegador-SQL";
$lang['L_SQL_CARDINALITY']="Cardinalmente";
$lang['L_SQL_CHANGED']="foi modificado.";
$lang['L_SQL_CHANGEFIELD']="modificar campo";
$lang['L_SQL_CHOOSEACTION']="Escolher ação";
$lang['L_SQL_COLLATENOTMATCH']="O conjunto de caracteres e"
    ." intercalação não combinam juntos!";
$lang['L_SQL_COLUMNS']="Colunas";
$lang['L_SQL_COMMANDS']="Comandos SQL";
$lang['L_SQL_COMMANDS_IN']="linhas em";
$lang['L_SQL_COMMANDS_IN2']="sec. parsed.";
$lang['L_SQL_COPYDATADB']="Copiar todo o banco de dados para";
$lang['L_SQL_COPYSDB']="Copiar a estrutura do banco de dados";
$lang['L_SQL_COPYTABLE']="copiar tabela";
$lang['L_SQL_CREATED']="foi criado.";
$lang['L_SQL_CREATEINDEX']="criar novo índice";
$lang['L_SQL_CREATETABLE']="crair tabela";
$lang['L_SQL_DATAVIEW']="Exibir dados";
$lang['L_SQL_DBCOPY']="O conteúdo do banco de dados `%s` foi"
    ." copiado no banco de dados `%s`.";
$lang['L_SQL_DBSCOPY']="A estrutura do banco de dados `%s` foi"
    ." copiada no banco de dados `%s`.";
$lang['L_SQL_DELETED']="foi excluido";
$lang['L_SQL_DESTTABLE_EXISTS']="tabelas de destinação existem !";
$lang['L_SQL_EDIT']="editar";
$lang['L_SQL_EDITFIELD']="Editar campo";
$lang['L_SQL_EDIT_TABLESTRUCTURE']="Edit table structure";
$lang['L_SQL_EMPTYDB']="Esvaziar banco de dados";
$lang['L_SQL_ERROR1']="Erro na consulta:";
$lang['L_SQL_ERROR2']="MySQL diz:";
$lang['L_SQL_EXEC']="Executar comando SQL";
$lang['L_SQL_EXPORT']="Exportar from banco de dados `%s`";
$lang['L_SQL_FIELDDELETE1']="O campo";
$lang['L_SQL_FIELDNAMENOTVALID']="Erro: Nenhum nome de campo válido";
$lang['L_SQL_FIRST']="primeiro";
$lang['L_SQL_IMEXPORT']="Importar-Exportar";
$lang['L_SQL_IMPORT']="Importar no banco de dados `%s`";
$lang['L_SQL_INCOMPLETE_STATEMENT_DETECTED']="%s: incomplete statement detected.<br"
    ." />Couldn't find closing match for '%s'"
    ." in query:<br />%s";
$lang['L_SQL_INDEXES']="Índices";
$lang['L_SQL_INSERTFIELD']="inserir campo";
$lang['L_SQL_INSERTNEWFIELD']="inserir novo campo";
$lang['L_SQL_LIBRARY']="Biblioteca SQL";
$lang['L_SQL_NAMEDEST_MISSING']="O nome da destinação está faltando"
    ." !";
$lang['L_SQL_NEWFIELD']="Novo campo";
$lang['L_SQL_NODATA']="nenhum registro";
$lang['L_SQL_NODEST_COPY']="Nenhuma cópia sem destinação !";
$lang['L_SQL_NOFIELDDELETE']="A exclusão não é possível porque"
    ." as tabelas devem ter pelo menos um"
    ." campo.";
$lang['L_SQL_NOTABLESINDB']="Nenhuma tabela encontrada no banco de"
    ." dados";
$lang['L_SQL_NOTABLESSELECTED']="Nenhuma tabela selecionada !";
$lang['L_SQL_OPENFILE']="Abrir arquivo SQL";
$lang['L_SQL_OPENFILE_BUTTON']="Upload";
$lang['L_SQL_OUT1']="Executado";
$lang['L_SQL_OUT2']="Comandos";
$lang['L_SQL_OUT3']="Haviam";
$lang['L_SQL_OUT4']="Comentários";
$lang['L_SQL_OUT5']="Devido à saída conter mais de 5000"
    ." linhas ela não será exibida.";
$lang['L_SQL_OUTPUT']="Saída SQL";
$lang['L_SQL_QUERYENTRY']="A consulta contém";
$lang['L_SQL_RECORDDELETED']="O registro foi excluido";
$lang['L_SQL_RECORDEDIT']="editar registro";
$lang['L_SQL_RECORDINSERTED']="O registro foi adicionado";
$lang['L_SQL_RECORDNEW']="novo registro";
$lang['L_SQL_RECORDUPDATED']="O registro foi atualizado";
$lang['L_SQL_RENAMEDB']="Renomear banco de dados";
$lang['L_SQL_RENAMEDTO']="foi renomeado para";
$lang['L_SQL_SCOPY']="A estrutura da tabela `%s` foi copiada"
    ." para a tabela `%s`.";
$lang['L_SQL_SEARCH']="Pesquisar";
$lang['L_SQL_SEARCHWORDS']="Pesquisar palavra(s)";
$lang['L_SQL_SELECTTABLE']="selecionar tabela";
$lang['L_SQL_SERVER']="SQL-Server";
$lang['L_SQL_SHOWDATATABLE']="Exibir dados da tabela";
$lang['L_SQL_STRUCTUREDATA']="Estrutura e dados";
$lang['L_SQL_STRUCTUREONLY']="Somente a estrutura";
$lang['L_SQL_TABLEEMPTIED']="A tabela `%s` foi excluida.";
$lang['L_SQL_TABLEEMPTIEDKEYS']="A tabela `%s` foi excluida e os"
    ." índices reiniciados.";
$lang['L_SQL_TABLEINDEXES']="Índices da tabela";
$lang['L_SQL_TABLENEW']="Editar tabelas";
$lang['L_SQL_TABLENOINDEXES']="Nenhum índices na tabela";
$lang['L_SQL_TABLENONAME']="A tabela requer um nome!";
$lang['L_SQL_TABLESOFDB']="Tabelas do banco de dados";
$lang['L_SQL_TABLEVIEW']="Exibir tabelas";
$lang['L_SQL_TBLNAMEEMPTY']="O nome da tabela não pode ser nulo!";
$lang['L_SQL_TBLPROPSOF']="Propriedades da tabela";
$lang['L_SQL_TCOPY']="A tabela `%s` foi copiada com os dados"
    ." da tabela `%s`.";
$lang['L_SQL_UPLOADEDFILE']="arquivo carregado:";
$lang['L_SQL_VIEW_COMPACT']="View: compact";
$lang['L_SQL_VIEW_STANDARD']="View: standard";
$lang['L_SQL_VONINS']="do total";
$lang['L_SQL_WARNING']="A execução do comandos SQL pode"
    ." manipular os dados. CUIDADO! Os"
    ." autores não aceitam qualquer"
    ." responsabilidade por danos ou perda de"
    ." dados.";
$lang['L_SQL_WASCREATED']="foi criada";
$lang['L_SQL_WASEMPTIED']="foi esvaziada";
$lang['L_STARTDUMP']="Iniciar backup";
$lang['L_START_RESTORE_DB_FILE']="Starting restore of database '%s' from"
    ." file '%s'.";
$lang['L_START_SQL_SEARCH']="iniciar pesquisa";
$lang['L_STATUS']="Estado";
$lang['L_STEP']="Passo";
$lang['L_SUCCESS_CONFIGFILE_CREATED']="Configuration file \"%s\" has"
    ." successfully been created.";
$lang['L_SUCCESS_DELETING_CONFIGFILE']="The configuration file \"%s\" has"
    ." successfully been deleted.";
$lang['L_TABLE']="Tabela";
$lang['L_TABLENAME']="Table name";
$lang['L_TABLENAME_EXPLAIN']="Table name";
$lang['L_TABLES']="Tabelas";
$lang['L_TABLESELECTION']="Seleção de tabela";
$lang['L_TABLE_CREATE_SUCC']="The table '%s' has been created"
    ." successfully.";
$lang['L_TABLE_TYPE']="Table Type";
$lang['L_TESTCONNECTION']="Testar conexão";
$lang['L_THEME']="Theme";
$lang['L_TIME']="Time";
$lang['L_TIMESTAMP']="Timestamp";
$lang['L_TITLE_INDEX']="Index";
$lang['L_TITLE_KEY_FULLTEXT']="Fulltext key";
$lang['L_TITLE_KEY_PRIMARY']="Primary key";
$lang['L_TITLE_KEY_UNIQUE']="Unique key";
$lang['L_TITLE_MYSQL_HELP']="MySQL documentation";
$lang['L_TITLE_NOKEY']="No key";
$lang['L_TITLE_SEARCH']="Search";
$lang['L_TITLE_SHOW_DATA']="Show data";
$lang['L_TITLE_UPLOAD']="Upload SQL file";
$lang['L_TO']="para";
$lang['L_TOOLS']="Ferramentas";
$lang['L_TOOLS_TOOLBOX']="Selecionar banco de dados / Funções"
    ." de banco de dados / Importar -"
    ." Exportar";
$lang['L_TRUNCATE']="Truncate";
$lang['L_TRUNCATE_DATABASE']="Truncate database";
$lang['L_UNIT_KB']="KiloByte";
$lang['L_UNIT_MB']="MegaByte";
$lang['L_UNIT_PIXEL']="Pixel";
$lang['L_UNKNOWN']="desconhecido";
$lang['L_UNKNOWN_SQLCOMMAND']="comando SQL desconhecido";
$lang['L_UPDATE']="Update";
$lang['L_UPDATE_CONNECTION_FAILED']="Update failed because connection to"
    ." server '%s' could not be established.";
$lang['L_UPDATE_ERROR_RESPONSE']="Update failed, server returned: '%s'";
$lang['L_UPTO']="até";
$lang['L_USERNAME']="Username";
$lang['L_USE_SSL']="Use SSL";
$lang['L_VALUE']="Valor";
$lang['L_VERSIONSINFORMATIONEN']="Versão da informação";
$lang['L_VIEW']="exibir";
$lang['L_VISIT_HOMEPAGE']="Visit Homepage";
$lang['L_VOM']="de";
$lang['L_WITH']="com";
$lang['L_WITHATTACH']="com anexo";
$lang['L_WITHOUTATTACH']="sem anexo";
$lang['L_WITHPRAEFIX']="com o prefixo";
$lang['L_WRONGCONNECTIONPARS']="Incorreto ou nenhum parâmetro de"
    ." conexão!";
$lang['L_WRONG_CONNECTIONPARS']="Os parâmetros de conexão estão"
    ." incorretos !";
$lang['L_WRONG_RIGHTS']="O arquivo ou o diretório '%s' não"
    ." tem permissão de escrita para mim.<br"
    ." /><br />As permissões (chmod) não"
    ." estão configuradas apropriadamente ou"
    ." não há privilégios suficientes para"
    ." este usuário.<br /><br />Por favor"
    ." configure corretamente as permissões"
    ." usando o programa de FTP.<br /><br />O"
    ." arquivo ou diretório necessitam de"
    ." configuração para %s.<br />";
$lang['L_YES']="sim";
$lang['L_ZEND_FRAMEWORK_VERSION']="Zend Framework Version";
$lang['L_ZEND_ID_ACCESS_NOT_A_DIRECTORY']="The given filename '%value%' isn't a"
    ." directory.";
$lang['L_ZEND_ID_ACCESS_NOT_A_FILE']="The given filename '%value%' isn't a"
    ." file.";
$lang['L_ZEND_ID_ACCESS_NOT_A_LINK']="The given target '%value%' is not a"
    ." link.";
$lang['L_ZEND_ID_ACCESS_NOT_EXECUTABLE']="The file or directory '%value%' isn't"
    ." executable.";
$lang['L_ZEND_ID_ACCESS_NOT_EXISTS']="The file or directory '%value%'"
    ." doesn't exists.";
$lang['L_ZEND_ID_ACCESS_NOT_READABLE']="The file or directory '%value%' isn't"
    ." readable.";
$lang['L_ZEND_ID_ACCESS_NOT_UPLOADED']="The given file '%value%' isn't an"
    ." uploaded file.";
$lang['L_ZEND_ID_ACCESS_NOT_WRITABLE']="The file or directory '%value%' isn't"
    ." writable.";
$lang['L_ZEND_ID_DIGITS_INVALID']="Invalid type given. String, integer or"
    ." float expected.";
$lang['L_ZEND_ID_DIGITS_STRING_EMPTY']="Value is an empty string.";
$lang['L_ZEND_ID_EMAIL_ADDRESS_DOT_ATOM']="The email address can not be matched"
    ." against dot-atom format.";
$lang['L_ZEND_ID_EMAIL_ADDRESS_INVALID']="Invalid type given. String expected.";
$lang['L_ZEND_ID_EMAIL_ADDRESS_INVALID_FORMAT']="The email address format is invalid.";
$lang['L_ZEND_ID_EMAIL_ADDRESS_INVALID_HOSTNAME']="The hostname is invalid.";
$lang['L_ZEND_ID_EMAIL_ADDRESS_INVALID_LOCAL_PART']="The local part of the email address"
    ." (<local-part>@<domain>.<tld>) is"
    ." invalid.";
$lang['L_ZEND_ID_EMAIL_ADDRESS_INVALID_MX_RECORD']="There is no valid MX record for this"
    ." email address.";
$lang['L_ZEND_ID_EMAIL_ADDRESS_INVALID_SEGMENT']="The hostname is located in a not"
    ." routable network segment. The email"
    ." address can not be resolved from"
    ." public network.";
$lang['L_ZEND_ID_EMAIL_ADDRESS_LENGTH_EXCEEDED']="The email address is too long. The"
    ." maximum length is 320 chars.";
$lang['L_ZEND_ID_EMAIL_ADDRESS_QUOTED_STRING']="The email addess can not be matched"
    ." against quoted-string format.";
$lang['L_ZEND_ID_IS_EMPTY']="Value is required and can't be empty.";
$lang['L_ZEND_ID_MISSING_TOKEN']="No token was provided to match"
    ." against.";
$lang['L_ZEND_ID_NOT_DIGITS']="Only digits are allowed.";
$lang['L_ZEND_ID_NOT_EMPTY_INVALID']="Invalid type given. String, integer,"
    ." float, boolean or array expected.";
$lang['L_ZEND_ID_NOT_SAME']="The two given tokens do not match.";
return $lang;
