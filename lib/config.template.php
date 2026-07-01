<?php
class Config {
  public static $hostname = 'quill.dev';
  public static $base_url = 'http://quill.dev/';
  public static $gaid = '';

  // MySQL (default)
  public static $dbType = 'mysql';
  public static $dbHost = '127.0.0.1';
  public static $dbName = 'quill';
  public static $dbUsername = 'quill';
  public static $dbPassword = '';

  // Sqlite
  // public static $dbType = 'sqlite';
  // public static $dbFilePath = './example.db';

  public static $jwtSecret = 'xxx';

  public static $atlasToken = '';
  public static $mapTileURL = '';

  // https://developers.google.com/maps/documentation/javascript/get-api-key
  public static $googleMapsAPIKey = '';
}

// Override with environment variables if they exist
if (getenv('DB_TYPE')) Config::$dbType = getenv('DB_TYPE');
if (getenv('DB_HOST')) Config::$dbHost = getenv('DB_HOST');
if (getenv('DB_NAME')) Config::$dbName = getenv('DB_NAME');
if (getenv('DB_USERNAME')) Config::$dbUsername = getenv('DB_USERNAME');
if (getenv('DB_PASSWORD')) Config::$dbPassword = getenv('DB_PASSWORD');
