CREATE TABLE /*_*/actor (actor_id BIGINT UNSIGNED NOT NULL, actor_user INT UNSIGNED NOT NULL, actor_name VARCHAR(255) NOT NULL, UNIQUE INDEX actor_user (actor_user), UNIQUE INDEX actor_name (actor_name), PRIMARY KEY(actor_id))
