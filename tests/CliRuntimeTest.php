<?php

declare(strict_types=1);

/**
 * @project Legatus CLI Runtime
 * @link https://github.com/legatus-php/runtime-cli
 * @package legatus/runtime-cli
 * @author Matias Navarro-Carter mnavarrocarter@gmail.com
 * @license MIT
 * @copyright 2021 Matias Navarro-Carter
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Legatus\Support;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;

class CliRuntimeTest extends TestCase
{
    public function testItRunsCli(): void
    {
        $appMock = $this->createMock(Application::class);

        $appMock->expects(self::once())
            ->method('run');

        $runtime = new CliRuntime($appMock);
        $runtime->run();
    }
}
