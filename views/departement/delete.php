<?php
$p = new Prodies;
$p->delete(["id_departement",$param]);
$d->delete(["id",$param]);
header("location: ?f=departement");