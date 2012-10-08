<?php

    class xyz96zyx
    {
        public static function xyz97zyx()
        {
            return date('Y-m-d H:i:s');
        }

        public static function xyz98zyx($invalid_location)
        {
            if(!is_numeric($_GET["id"]))
            {
                header("Location: $invalid_location");
            }
            return $_GET["id"];
        }

        public static function xyz99zyx($key,$invalid_location)
        {
            if(!isset($_GET[$key])) header("Location: $invalid_location");
                        
            if(!is_numeric($_GET[$key]))
            {
                header("Location: $invalid_location");
            }
            return $_GET[$key];
        }

        public static function xyz100zyx($control_id)
        {
            return htmlspecialchars(xyz96zyx::xyz101zyx($control_id));
        }

        public static function xyz101zyx($control_id)
        {
            global $$control_id;
            if(!isset($$control_id))
            {
                return "";
            }
            else
            {
                return $$control_id;
            }

        }

       public static function xyz102zyx($y2_raw)
        {
         if( empty($y2_raw) || !is_string($y2_raw) )
         {
          return false;
         }

         $y2_reserved_all = array (
             'ACCESSIBLE', 'ACTION', 'ADD', 'AFTER', 'AGAINST', 'AGGREGATE', 'ALGORITHM', 'ALL', 'ALTER', 'ANALYSE', 'ANALYZE', 'AND', 'AS', 'ASC',
             'AUTOCOMMIT', 'AUTO_INCREMENT', 'AVG_ROW_LENGTH', 'BACKUP', 'BEGIN', 'BETWEEN', 'BINLOG', 'BOTH', 'BY', 'CASCADE', 'CASE', 'CHANGE', 'CHANGED',
             'CHARSET', 'CHECK', 'CHECKSUM', 'COLLATE', 'COLLATION', 'COLUMN', 'COLUMNS', 'COMMENT', 'COMMIT', 'COMMITTED', 'COMPRESSED', 'CONCURRENT',
             'CONSTRAINT', 'CONTAINS', 'CONVERT', 'CREATE', 'CROSS', 'CURRENT_TIMESTAMP', 'DATABASE', 'DATABASES', 'DAY', 'DAY_HOUR', 'DAY_MINUTE',
             'DAY_SECOND', 'DEFINER', 'DELAYED', 'DELAY_KEY_WRITE', 'DELETE', 'DESC', 'DESCRIBE', 'DETERMINISTIC', 'DISTINCT', 'DISTINCTROW', 'DIV',
             'DO', 'DROP', 'DUMPFILE', 'DUPLICATE', 'DYNAMIC', 'ELSE', 'ENCLOSED', 'END', 'ENGINE', 'ENGINES', 'ESCAPE', 'ESCAPED', 'EVENTS', 'EXECUTE',
             'EXISTS', 'EXPLAIN', 'EXTENDED', 'FAST', 'FIELDS', 'FILE', 'FIRST', 'FIXED', 'FLUSH', 'FOR', 'FORCE', 'FOREIGN', 'FROM', 'FULL', 'FULLTEXT',
             'FUNCTION', 'GEMINI', 'GEMINI_SPIN_RETRIES', 'GLOBAL', 'GRANT', 'GRANTS', 'GROUP', 'HAVING', 'HEAP', 'HIGH_PRIORITY', 'HOSTS', 'HOUR', 'HOUR_MINUTE',
             'HOUR_SECOND', 'IDENTIFIED', 'IF', 'IGNORE', 'IN', 'INDEX', 'INDEXES', 'INFILE', 'INNER', 'INSERT', 'INSERT_ID', 'INSERT_METHOD', 'INTERVAL',
             'INTO', 'INVOKER', 'IS', 'ISOLATION', 'JOIN', 'KEY', 'KEYS', 'KILL', 'LAST_INSERT_ID', 'LEADING', 'LEFT', 'LEVEL', 'LIKE', 'LIMIT', 'LINEAR',
             'LINES', 'LOAD', 'LOCAL', 'LOCK', 'LOCKS', 'LOGS', 'LOW_PRIORITY', 'MARIA', 'MASTER', 'MASTER_CONNECT_RETRY', 'MASTER_HOST', 'MASTER_LOG_FILE',
             'MASTER_LOG_POS', 'MASTER_PASSWORD', 'MASTER_PORT', 'MASTER_USER', 'MATCH', 'MAX_CONNECTIONS_PER_HOUR', 'MAX_QUERIES_PER_HOUR',
             'MAX_ROWS', 'MAX_UPDATES_PER_HOUR', 'MAX_USER_CONNECTIONS', 'MEDIUM', 'MERGE', 'MINUTE', 'MINUTE_SECOND', 'MIN_ROWS', 'MODE', 'MODIFY',
             'MONTH', 'MRG_MYISAM', 'MYISAM', 'NAMES', 'NATURAL', 'NOT', 'NULL', 'OFFSET', 'ON', 'OPEN', 'OPTIMIZE', 'OPTION', 'OPTIONALLY', 'OR',
             'ORDER', 'OUTER', 'OUTFILE', 'PACK_KEYS', 'PAGE', 'PARTIAL', 'PARTITION', 'PARTITIONS', 'PASSWORD', 'PRIMARY', 'PRIVILEGES', 'PROCEDURE',
             'PROCESS', 'PROCESSLIST', 'PURGE', 'QUICK', 'RAID0', 'RAID_CHUNKS', 'RAID_CHUNKSIZE', 'RAID_TYPE', 'RANGE', 'READ', 'READ_ONLY',
             'READ_WRITE', 'REFERENCES', 'REGEXP', 'RELOAD', 'RENAME', 'REPAIR', 'REPEATABLE', 'REPLACE', 'REPLICATION', 'RESET', 'RESTORE', 'RESTRICT',
             'RETURN', 'RETURNS', 'REVOKE', 'RIGHT', 'RLIKE', 'ROLLBACK', 'ROW', 'ROWS', 'ROW_FORMAT', 'SECOND', 'SECURITY', 'SELECT', 'SEPARATOR',
             'SERIALIZABLE', 'SESSION', 'SET', 'SHARE', 'SHOW', 'SHUTDOWN', 'SLAVE', 'SONAME', 'SOUNDS', 'SQL', 'SQL_AUTO_IS_NULL', 'SQL_BIG_RESULT',
             'SQL_BIG_SELECTS', 'SQL_BIG_TABLES', 'SQL_BUFFER_RESULT', 'SQL_CACHE', 'SQL_CALC_FOUND_ROWS', 'SQL_LOG_BIN', 'SQL_LOG_OFF',
             'SQL_LOG_UPDATE', 'SQL_LOW_PRIORITY_UPDATES', 'SQL_MAX_JOIN_SIZE', 'SQL_NO_CACHE', 'SQL_QUOTE_SHOW_CREATE', 'SQL_SAFE_UPDATES',
             'SQL_SELECT_LIMIT', 'SQL_SLAVE_SKIP_COUNTER', 'SQL_SMALL_RESULT', 'SQL_WARNINGS', 'START', 'STARTING', 'STATUS', 'STOP', 'STORAGE',
             'STRAIGHT_JOIN', 'STRING', 'STRIPED', 'SUPER', 'TABLE', 'TABLES', 'TEMPORARY', 'TERMINATED', 'THEN', 'TO', 'TRAILING', 'TRANSACTIONAL',
             'TRUNCATE', 'TYPE', 'TYPES', 'UNCOMMITTED', 'UNION', 'UNIQUE', 'UNLOCK', 'UPDATE', 'USAGE', 'USE', 'USING', 'VALUES', 'VARIABLES',
             'VIEW', 'WHEN', 'WHERE', 'WITH', 'WORK', 'WRITE', 'XOR', 'YEAR_MONTH'
         );

         $y2_skip_reserved_words = array('AS', 'ON', 'USING');
         $y2_special_reserved_words = array('(', ')');

         $y2_raw = str_replace("\n", " ", $y2_raw);

         $y2_formatted = "";

         $prev_word = "";
         $word = "";

         for( $i=0, $j = strlen($y2_raw); $i < $j; $i++ )
         {
          $word .= $y2_raw[$i];

          $word_trimmed = trim($word);

          if($y2_raw[$i] == " " || in_array($y2_raw[$i], $y2_special_reserved_words))
          {
           $word_trimmed = trim($word);

           $trimmed_special = false;

           if( in_array($y2_raw[$i], $y2_special_reserved_words) )
           {
            $word_trimmed = substr($word_trimmed, 0, -1);
            $trimmed_special = true;
           }

           $word_trimmed = strtoupper($word_trimmed);

           if( in_array($word_trimmed, $y2_reserved_all) && !in_array($word_trimmed, $y2_skip_reserved_words) )
           {
            if(in_array($prev_word, $y2_reserved_all))
            {
             $y2_formatted .= '<b>'.strtoupper(trim($word)).'</b>'.'&nbsp;';
            }
            else
            {
             $y2_formatted .= '<br/>&nbsp;';
             $y2_formatted .= '<b>'.strtoupper(trim($word)).'</b>'.'&nbsp;';
            }

            $prev_word = $word_trimmed;
            $word = "";
           }
           else
           {
            $y2_formatted .= trim($word).'&nbsp;';

            $prev_word = $word_trimmed;
            $word = "";
           }
          }
         }

         $y2_formatted .= trim($word);

         return $y2_formatted;
        }

       
    }

?>
