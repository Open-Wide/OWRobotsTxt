<?php

class OWRobotTxtMigration extends OWMigration {

    public function up( ) {
        $migration = new OWMigrationContentClass( );
        $migration->startMigrationOn( 'robots_txt' );
        $migration->createIfNotExists( );
        $migration->contentobject_name = 'robots.txt';
        $migration->name = 'robots.txt';
        $migration->addAttribute( 'production', array( 'data_type_string' => 'eztext' ) );
        $migration->addAttribute( 'other', array( 'data_type_string' => 'eztext' ) );
        $migration->addToContentClassGroup( 'Setup' );
        $migration->end( );

    }

    public function down( ) {
        $migration = new OWMigrationContentClass( );
        $migration->startMigrationOn( 'robots_txt' );
        $migration->removeClass( );
    }

}
?>
