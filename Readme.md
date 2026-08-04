This plugin provides an enriched version of TCPDF along
with other PDF related tools.

Using this alternative version might sometime collide with
core lib/tcpdflib.php version. In case it happens, we provide
a core patch destinated to avoid requirement collisions.

__reference directory contains the original moodle files that served
as reference for patching. They may differ from your installation as
they have been snapshoted at development time.

__patch directory contains replacement patched files, with all patches marked
with //PATCH+. //PATCH- markers.

All APL patches can be managed by our report_patches Report plugin, for long term
maintenance of a patched installation.

Official plugin documentation at : https://ma.formation-enligne.com/course/view.php?id=2162