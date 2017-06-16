<?php if (!defined('APPLICATION')) exit();
$PluginInfo['NBBCWhitespaceTrim'] = array(
    'Name' => 'NBBC Whitespace Trimmer',
    'Description' => 'Enables NBBC\'s built-in pre-trim and post-trim functions to remove leading and trailing whitespace from discussion posts, comments, messages, and so on.',
    'Version' => '1.0.0',
    'RequiredApplications' => array('Vanilla' => '2.1'),
    'RequiredTheme' => FALSE,
    'RequiredPlugins' => FALSE,
    'HasLocale' => FALSE,
    'Author' => "James Ducker",
    'AuthorEmail' => 'james.ducker@gmail.com',
    'AuthorUrl' => 'https://github.com/jamesinc',
	'License' => 'GPL-3.0'
);

class NBBCWhitespaceTrimPlugin extends Gdn_Plugin {

    public function bbcode_afterBBCodeSetup_handler( $sender ) {
        $sender->EventArguments['BBCode']->setPreTrim();
        $sender->EventArguments['BBCode']->setPostTrim();        
    }

}

?>