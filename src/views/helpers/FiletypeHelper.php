<?php
/**
 * SeekQuarry/Yioop --
 * Open Source Pure PHP Search Engine, Crawler, and Indexer
 *
 * Copyright (C) 2009 - 2021  Chris Pollett chris@pollett.org
 *
 * LICENSE:
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * END LICENSE
 *
 * @author Chris Pollett chris@pollett.org
 * @license https://www.gnu.org/licenses/ GPL3
 * @link https://www.seekquarry.com/
 * @copyright 2009 - 2021
 * @filesource
 */
namespace seekquarry\yioop\views\helpers;

/**
 * This is a helper class is used to handle
 * used to render the filetype based on
 * the supplied mimetype. It is mainly
 * intended to be used in outputing
 * webpage results for non html pages.
 * When a page is downloaded the mime type
 * of the page is obtained from the server.
 * This is typically longer and less familiar
 * to people than the file extension. So we
 * want to output the latter.
 *
 * @author Chris Pollett
 */
class FiletypeHelper extends Helper
{
    /**
     * Outputs the filetype corresponding to the supplied
     * mime type.
     *
     * @param string $mime_type   the mime type that should
     * be output as a file extention
     */
    public function render($mime_type)
    {
        switch ($mime_type) {
            case "text/csv":
                echo " [CSV]";
                break;
            case "application/msword":
                echo " [DOC]";
                break;
            case "application/pdf":
                echo " [PDF]";
                break;
            case "application/vnd.ms-powerpoint":
                echo " [PPT]";
                break;
            case "application/vnd.openxmlformats-officedocument." .
                "presentationml.presentation":
                echo " [PPTX]";
                break;
            case "application/rss+xml":
                echo " [RSS]";
                break;
            case "application/rtf":
                echo " [RTF]";
                break;
            case "text/rtf":
                echo " [RTF]";
                break;
            case "text/tab-separated-values":
                echo " [TAB]";
                break;
            case "text/plain":
                echo " [TXT]";
                break;
            case "application/vnd.ms-excel":
                echo " [XLS]";
                break;
            case "application/vnd.openxmlformats-officedocument." .
                "spreadsheetml.sheet":
                echo " [XLSX]";
                break;
            case "text/xml":
                echo " [XML]";
                break;
            case "text/java":
                echo " [Java]";
                break;
            case "text/py":
                echo " [PYTHON]";
                break;
            case "text/gitxml":
                echo " [XML]";
                break;
        }
    }

}
