select count(id_film) as movies from member_history where (date > '2006-10-29 23:59:59' and date < '2007-07-27 23:59:59') or date like '%-12-24%';
