<?php
/**
 * CMysqlTableSchema class file.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link https://www.yiiframework.com/
 * @copyright 2008-2013 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

/**
 * CMysqlTableSchema represents the metadata for a MySQL table.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @package system.db.schema.mysql
 * @since 1.0
 */
class CMysqlTableSchema extends CDbTableSchema
{
	/**
	 * @var string name of the schema (database) that this table belongs to.
	 * Defaults to null, meaning no schema (or the current database).
	 */
	public $schemaName;

	/**
	 * @var array composite foreign key constraints that cannot be represented
	 * as a simple column-to-column mapping. Each entry is indexed by the
	 * constraint name and contains:
	 *   'columns'    => local column names (array)
	 *   'refTable'   => referenced table name (string)
	 *   'refColumns' => referenced column names (array)
	 */
	public $compositeForeignKeys = array();
}
