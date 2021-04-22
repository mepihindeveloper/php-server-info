<?php

declare(strict_types = 1);

namespace mepihindeveloper\components\interfaces;

/**
 * Interface ServerInfoInterface
 *
 * Декларирует методы обязательные для реализации компонента ServerInfo
 *
 * @package mepihindeveloper\components\interfaces
 */
interface ServerInfoInterface {
	
	/**
	 * Возвращает имя файла скрипта, который сейчас выполняется, относительно корня документов
	 *
	 * @return mixed
	 */
	public static function getPhpSelf();
	
	/**
	 * Возвращает используемую сервером версию спецификации CGI
	 *
	 * @return mixed
	 */
	public static function getGetawayInterface();
	
	/**
	 * Возвращает IP-адрес сервера, на котором выполняется текущий скрипт
	 *
	 * @return mixed
	 */
	public static function getServerAddr();
	
	/**
	 * Возвращает имя хоста, на котором выполняется текущий скрипт
	 *
	 * @return mixed
	 */
	public static function getServerName();
	
	/**
	 * Возвращает идентификации сервера, указанная в заголовках, когда происходит ответ на запрос
	 *
	 * @return mixed
	 */
	public static function getServerSoftware();
	
	/**
	 * Возвращает имя и версия информационного протокола, через который была запрошена страница
	 *
	 * @return mixed
	 */
	public static function getServerProtocol();
	
	/**
	 * Возвращает метод, который был использован для запроса страницы
	 *
	 * @return mixed
	 */
	public static function getRequestMethod();
	
	/**
	 * Возвращает метку начала запроса
	 *
	 * @return mixed
	 */
	public static function getRequestTime();
	
	/**
	 * Возвращает метку начала запроса с точностью до микросекунд
	 *
	 * @return mixed
	 */
	public static function getRequestTimeFloat();
	
	/**
	 * Возвращает строку запроса, если есть, через которую была открыта страница
	 *
	 * @return mixed
	 */
	public static function getQueryString();
	
	/**
	 * Возвращает директорию корня документов, в которой выполняется текущий скрипт, в точности та, которая указана
	 * в конфигурационном файле сервера
	 *
	 * @return mixed
	 */
	public static function getDocumentRoot();
	
	/**
	 * Возвращает значение, если запрос был произведён через протокол HTTPS
	 *
	 * @return mixed
	 */
	public static function getHttps();
	
	/**
	 * Возвращает IP-адрес, с которого пользователь просматривает текущую страницу
	 *
	 * @return mixed
	 */
	public static function getRemoteAddr();
	
	/**
	 * Возвращает удалённый хост, с которого пользователь просматривает текущую страницу
	 *
	 * @return mixed
	 */
	public static function getRemoteHost();
	
	/**
	 * Возвращает порт на удалённой машине, который используется для связи с сервером
	 *
	 * @return mixed
	 */
	public static function getRemotePort();
	
	/**
	 * Возвращает аутентифицированного пользователя
	 *
	 * @return mixed
	 */
	public static function getRemoteUser();
	
	/**
	 * Возвращает аутентифицированного пользователя, если запрос был перенаправлен изнутри
	 *
	 * @return mixed
	 */
	public static function getRedirectRemoteUser();
	
	/**
	 * Возвращает абсолютный путь к исполняемому скрипту
	 *
	 * @return mixed
	 */
	public static function getScriptFileName();
	
	/**
	 * Возвращает SERVER_ADMIN из конфигурации
	 *
	 * @return mixed
	 */
	public static function getServerAdmin();
	
	/**
	 * Возвращает порт на компьютере сервера, используемый сервером для соединения
	 *
	 * @return mixed
	 */
	public static function getServerPort();
	
	/**
	 * Возвращает строку, содержащая версию сервера и имя виртуального хоста, которые добавляются к генерируемым
	 * сервером страницам, если включено
	 *
	 * @return mixed
	 */
	public static function getServerSignature();
	
	/**
	 * Возвращает путь файловой системы (не document root) к текущему скрипту, после того как сервер выполнил
	 * отображение virtual-to-real
	 *
	 * @return mixed
	 */
	public static function getPathTranslated();
	
	/**
	 * Возвращает путь к текущему исполняемому скрипту
	 *
	 * @return mixed
	 */
	public static function getScriptName();
	
	/**
	 * Возвращает URI, который был предоставлен для доступа к этой странице
	 *
	 * @return mixed
	 */
	public static function getRequestUri();
	
	/**
	 * Возвращает имя пользователя, который прошел HTTP-аутентификацию
	 *
	 * @return mixed
	 */
	public static function getPhpAuthUser();
	
	/**
	 * Возвращает пароль пользователя, который прошел HTTP-аутентификацию
	 *
	 * @return mixed
	 */
	public static function getPhpAuthPw();
	
	/**
	 * Возвращает тип аутентификации, который используется при HTTP-аутентификации
	 *
	 * @return mixed
	 */
	public static function getAuthType();
	
	/**
	 * Возвращает любой предоставленный пользователем путь, содержащийся после имени скрипта, но до строки запроса,
	 * если она есть
	 *
	 * @return mixed
	 */
	public static function getPathInfo();
	
	/**
	 * Возвращает исходное значение переменной 'PATH_INFO' перед обработкой PHP
	 *
	 * @return mixed
	 */
	public static function getOrigPathInfo();
}