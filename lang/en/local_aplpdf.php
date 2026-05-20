<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language file.
 *
 * @package     local_aplpdf
 * @author      valery.fremaux@gmail.com
 * @copyright   2015 valery.fremaux@gmail.com
 * @license     https://www.gnu.org/copyleft/gpl.html GNU Public License
 */

$string['configdefaulttemplate'] = 'Default content template';
$string['configdefaulttemplate_desc'] = 'An html sequence as default document for the current plugin.';
$string['configdocborderimage'] = 'An image for document border';
$string['configdocborderimage_desc'] = 'A jpg or png image. Transparency is NOT supported in tcpdf. Try compress it as much as possible.';
$string['configdocfooterimage'] = 'Footer';
$string['configdocfooterimage_desc'] = 'A jpg or png image. Transparency is NOT supported in tcpdf. Associated printconfigs : footerx, footery; footerw and footerh.';
$string['configdocheaderimage'] = 'Header';
$string['configdocheaderimage_desc'] = 'A jpg or png image. Transparency is NOT supported in tcpdf. Associated printconfigs : headerx, headery; headerw and headerh.';
$string['configdocinnerfooterimage'] = 'Inner Footer';
$string['configdocinnerfooterimage_desc'] = 'A jpg or png image. Transparency is NOT supported in tcpdf. Associated printconfigs : footerx, footery; footerw and footerh.';
$string['configdocinnerheaderimage'] = 'Inner Header';
$string['configdocinnerheaderimage_desc'] = 'A jpg or png image. Transparency is NOT supported in tcpdf. Associated printconfigs : headerx, headery; headerw and headerh.';
$string['configdoclogoimage'] = 'A logo image';
$string['configdoclogoimage_desc'] = 'A jpg or png image. Transparency is NOT supported in tcpdf. Associated printconfigs : logox, logoy; logow and logoh.';
$string['configdocwatermarkimage'] = 'A background image for watermarking the document.';
$string['configdocwatermarkimage_desc'] = 'A jpg or png image. Transparency is NOT supported in tcpdf. Note that big images may severely lower the pdf generator performance. Associated printconfigs : watermarkx, watermarky; watermarkw and watermarkh.';
$string['configenablelocalpdf'] = 'Enable local pdf';
$string['configenablelocalpdf_desc'] = 'Enables the use of the locally modified tcpdf library. This needs protecting the original lib/tcpdf lib from definition collision. Read the REDME.txt file for more information.';
$string['configpdfenabled'] = 'Pdf generator enabled';
$string['configpdfenabled_desc'] = 'Enables pdf generation for bills and other shop documents';
$string['configpdfgeneration'] = 'Pdf generation settings';
$string['configprintconfig'] = 'Pdf general configuration';
$string['configprintconfig_desc'] = 'A serialized set of printing attributes';
$string['pluginname'] = 'Alternate PDF libraries for APL plugins';
$string['privacy:metadata'] = 'The Local AplPdf plugin does not store any personal data about any user.';

