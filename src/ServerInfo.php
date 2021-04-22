<?php

declare(strict_types = 1);

namespace mepihindeveloper\components;

use mepihindeveloper\components\interfaces\ServerInfoInterface;

/**
 * Class ServerInfo
 *
 * Класс предназначен для получения данных из $_SERVER.
 *
 * @package mepihindeveloper\components
 */
class ServerInfo implements ServerInfoInterface {
	
	/**
	 * @inheritDoc
	 */
	public static function getPhpSelf() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * Получает константу для $_SERVER относительно названия метода обращения.
	 *
	 * @return string
	 */
	protected static function getVarName(): string {
		$calledFunctionName = explode('get', debug_backtrace()[1]['function'])[1];
		$pieces = array_filter(preg_split('/(?=[A-Z])/', $calledFunctionName));
		$piecesUpperValues = array_map('strtoupper', $pieces);
		
		return implode('_', $piecesUpperValues);
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getGetawayInterface() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getServerAddr() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getServerName() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getServerSoftware() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getServerProtocol() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getRequestMethod() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getRequestTime() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getRequestTimeFloat() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getQueryString() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getDocumentRoot() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getHttps() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getRemoteAddr() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getRemoteHost() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getRemotePort() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getRemoteUser() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getRedirectRemoteUser() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getScriptFileName() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getServerAdmin() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getServerPort() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getServerSignature() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getPathTranslated() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getScriptName() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getRequestUri() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getPhpAuthUser() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getPhpAuthPw() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getAuthType() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getPathInfo() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
	
	/**
	 * @inheritDoc
	 */
	public static function getOrigPathInfo() {
		return filter_input(INPUT_SERVER, self::getVarName());
	}
}