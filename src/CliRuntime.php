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

use Symfony\Component\Console\Application;

/**
 * Class CliRuntime.
 */
final class CliRuntime implements Runtime
{
    /**
     * @var Application
     */
    private Application $application;

    /**
     * CliRuntime constructor.
     *
     * @param Application $application
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    public function run(): void
    {
        $this->application->run();
    }
}
