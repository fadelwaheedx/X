<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;

class ModulesManifestTest extends TestCase
{
    public function test_manifest_defines_brain_and_limbs(): void
    {
        $configPath = __DIR__.'/../../config/modules.php';
        $this->assertFileExists($configPath, 'modules config must exist');

        $config = require $configPath;
        $this->assertArrayHasKey('manifest', $config);
        $this->assertNotEmpty($config['manifest']);

        $names = array_column($config['manifest'], 'name');
        $this->assertContains('Brain', $names);
        $this->assertContains('Borders', $names);
        $this->assertContains('CommercialRegistry', $names);
        $this->assertContains('MarketMonitoring', $names);
        $this->assertContains('HRMSHRIS', $names);
    }
}
