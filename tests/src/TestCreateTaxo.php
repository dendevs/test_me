<?php
namespace DenDev\Test\TestILogger;


class TestCreateTaxo extends \WP_UnitTestCase
{
	public function test_taxo_exist()
	{
		$this->assertTrue( taxonomy_exists( 'genre' ) );
	}
}

?>
