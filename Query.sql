select game as pay from users
inner join payments on users.id=payments.user_id
where level>10
group by game, users.id
having sum(amount)>100