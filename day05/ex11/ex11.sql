select upper(last_name) as NAME,first_name,price from (user_card join (member join subscription on member.id_sub = subscription.id_sub) on user_card.id_user=member.id_member) where ((select price from subscription where id_sub = member.id_sub) > 42) order by last_name asc, first_name asc;


-- this gets the list of members with pricey subscriptions
/*
select * from member where ((select price from subscription where id_sub = member.id_sub) > 42);

select * from member where ((select price from subscription where id_sub = member.id_sub) > 42);

select upper(last_name) as NAME,first_name,id_sub from user_card join member on user_card.id_user=member.id_member;

select upper(last_name) as NAME,first_name,id_sub from (user_card join member on user_card.id_user=member.id_member) where ((select price from subscription where id_sub = member.id_sub) > 42);

select upper(last_name) as NAME,first_name,price from (user_card join (member join subscription on member.id_sub = subscription.id_sub) on user_card.id_user=member.id_member) where ((select price from subscription where id_sub = member.id_sub) > 42);
*/
