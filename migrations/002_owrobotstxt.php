<?php

class OWRobotsTxt_002 {

    public function up( ) {
        $migration = new OWMigrationContentClass( );
        $migration->startMigrationOn( 'sitemap_xml' );
        $migration->createIfNotExists( );
        $migration->contentobject_name = 'sitemap.xml';
        $migration->name = 'sitemap.xml';
        $migration->addAttribute( 'production', array( 'data_type_string' => 'eztext' ) );
        $migration->addAttribute( 'other', array( 'data_type_string' => 'eztext' ) );
        $migration->addToContentClassGroup( 'OWRobotsTxt' );
        $migration->end( );

    }

    public function down( ) {
        $migration = new OWMigrationContentClass( );
        $migration->startMigrationOn( 'sitemap_xml' );
        $migration->removeClass( );
    }

}
?>
