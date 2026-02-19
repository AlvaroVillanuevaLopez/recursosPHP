<?php
$fecha = new DateTime();
$hoy = $fecha->format('Y/m/d');
/*
Formatos de DateTime en PHP
Día
d: Día del mes, 2 dígitos con cero inicial (01–31)

D: Día de la semana abreviado (Mon–Sun)

j: Día del mes sin cero inicial (1–31)

l: Día completo de la semana (Monday–Sunday)

N: Día de la semana ISO-8601 (1=lunes, 7=domingo)

S: Sufijo ordinal inglés para el día (st, nd, rd, th)

w: Día de la semana numérico (0=domingo, 6=sábado)

z: Día del año (comenzando en 0, 0–365)
-
Semana
W: Número de semana ISO-8601 (01–53)
-
Mes
F: Nombre completo del mes (January–December)

m: Mes con dos dígitos (01–12)

M: Mes abreviado (Jan–Dec)

n: Mes sin cero inicial (1–12)

t: Número de días en el mes (28–31)
-
Año
L: Año bisiesto (1 si es bisiesto, 0 si no)

Y: Año completo, 4 dígitos (2025)

y: Año, 2 dígitos (25)
-
Hora
a: am/pm minúscula (am, pm)

A: AM/PM mayúscula (AM, PM)

g: Hora 12h sin cero inicial (1–12)

G: Hora 24h sin cero inicial (0–23)

h: Hora 12h con cero inicial (01–12)

H: Hora 24h con cero inicial (00–23)
-
Minuto, Segundo, Microsegundo
i: Minutos con cero inicial (00–59)

s: Segundos con cero inicial (00–59)

u: Microsegundos (654321)
-
Zona horaria
e: Identificador de zona horaria (UTC, Europe/London)

I: Horario de verano (1 si está activo, 0 si no)

O: Diferencia en horas y minutos respecto a UTC (+0200)

P: Diferencia en horas y minutos con dos puntos (+02:00)

T: Abreviatura de zona horaria (EST, MDT)

Z: Diferencia en segundos respecto a UTC (-43200 a 50400)
-
Timestamp y otros
c: Formato ISO 8601 completo (2004-02-12T15:19:21+00:00)

r: Formato RFC 2822 completo (Thu, 21 Dec 2000 16:01:07 +0200)

U: Timestamp Unix (segundos desde 1970-01-01)
-
*/
