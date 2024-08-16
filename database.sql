CREATE TABLE users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    email_verified_at TIMESTAMP NULL,
    password VARCHAR(255) NOT NULL,
    remember_token VARCHAR(100) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

INSERT INTO users (full_name, username, email, password, remember_token, created_at, updated_at)
VALUES (
    'Super Admin',
    'admin',
    'admin@admin.com',
    '$2y$10$gcT11j089hMxv6cv9pkK9u/o.9Zj12qWjG8KWGVr0eZRc9NR6FKoK',
    NULL,
    NOW(),
    NOW()
);

CREATE TABLE sales_call_reports (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    school_name VARCHAR(255) NOT NULL,
    regency VARCHAR(255) NOT NULL,
    teacher_name VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    audience INT NOT NULL,
    image VARCHAR(255) NOT NULL,
    requirement TEXT NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

