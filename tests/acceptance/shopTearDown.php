<?php
/**
 *    This file is part of OXID eShop Community Edition.
 *
 *    OXID eShop Community Edition is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    OXID eShop Community Edition is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link http://www.oxid-esales.com
 * @package tests
 * @copyright (C) OXID eSales AG 2003-2013
 * @version OXID eShop CE
 */


require_once 'oxidAdditionalSeleniumFunctions.php';

class shopTearDown extends oxidAdditionalSeleniumFunctions
{
    protected function setUp($skipDemoData=false)
    {
        parent::setUp(true);
    }

    /**
     * Restores database after every test
     *
     */
    protected function tearDown()
    {
        $this->skipDbRestore = true;

        parent::tearDown();
    }

//------------------------------- Tear down ---------------------------------

    /**
     * closes all open firefox windows
     */
    public function testRestoreDb()
    {
        $this->restoreDB("orig_db_dump");
    }

    /**
     * closes all open firefox windows
     */
    public function testCloseFirefox()
    {
        echo "Closing active browser windows: ";
        $this->stop();
    }

}
