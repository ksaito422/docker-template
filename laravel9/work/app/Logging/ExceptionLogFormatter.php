<?php

namespace App\Logging;

use Monolog\Formatter\LineFormatter;
use Monolog\Logger;
use Monolog\Processor\IntrospectionProcessor;
use Monolog\Processor\WebProcessor;
use Monolog\Processor\UidProcessor;
use Monolog\Processor\HostnameProcessor;
use Illuminate\Support\Facades\Auth;

class ExceptionLogFormatter
{
	/**
	 * ログフォーマット
	 */
	private $logFormat =
	'    [(JST)%datetime%]
    [(UUID)%extra.uid%]
    [(HOSTNAME)%extra.hostname%]
    [(USERID)%extra.user_id%]
    [(IP)%extra.ip%]
    [%extra.http_method%][%extra.url%]
    [%extra.class%@%extra.function%(%extra.line%)]
    [%level_name%]
    %message% %context%' . PHP_EOL . "\n";

	/**
	 * 日付フォーマット
	 */
	private $dateFormat = 'Y-m-d H:i:s.v';

	/**
	 * Customize the given logger instance.
	 *
	 * @param  \Illuminate\Log\Logger  $logger
	 * @return void
	 */
	public function __invoke($logger)
	{
		// formatter
		$formatter = new LineFormatter($this->logFormat, $this->dateFormat, true, true);

		$ip = new IntrospectionProcessor(Logger::DEBUG, ['Illuminate\\']);

		$wp = new WebProcessor();

		$uid = new UidProcessor();

		$hp = new HostnameProcessor();

		foreach ($logger->getHandlers() as $handler) {
			$handler->setFormatter($formatter);
			$handler->pushProcessor($ip);
			$handler->pushProcessor($wp);
			$handler->pushProcessor($uid);
			$handler->pushProcessor($hp);
			$handler->pushProcessor([$this, 'processLogRecord']);
		}
	}

	public function processLogRecord(array $record): array
	{
		$userId = 'guest';
		if (Auth::check()) {
			$userId = Auth::id();
		}

		$record['extra'] += [
			'user_id' => $userId,
		];

		return $record;
	}
}
