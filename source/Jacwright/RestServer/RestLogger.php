<?php
namespace Jacwright\RestServer;

interface RestLogger {
	/**
	 * Logs a message at the specified log level.
	 *
	 * @param string $level   The log level (e.g. "info", "error").
	 * @param string $message The log message.
	 * @param array  $context An array of context data to include in the log.
	 *
	 * @return void
	 */
	public function log($level, $message, array $context = []);

	public function startRequest();
    public function endRequest(string $endpoint,
        ?array $params,
        int $statusCode,
        ?string $errorMessage = null);
}
