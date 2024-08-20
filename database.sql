CREATE TABLE user (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    email_verified_at TIMESTAMP NULL,
    password VARCHAR(255) NOT NULL,
    remember_token VARCHAR(100) NULL,
    created_at TIMESTAMP NULL,
    created_by BIGINT NOT NULL,
    updated_at TIMESTAMP NULL,
    updated_by BIGINT NOT NULL
);

INSERT INTO user (full_name, username, email, password, remember_token, created_at, updated_at)
VALUES (
    'Super Admin',
    'admin',
    'admin@admin.com',
    '$2y$10$gcT11j089hMxv6cv9pkK9u/o.9Zj12qWjG8KWGVr0eZRc9NR6FKoK',
    NULL,
    NOW(),
    NOW()
);

CREATE TABLE sales_call (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    school_name VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    teacher_name VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    audience INT NOT NULL,
    image VARCHAR(255) NOT NULL,
    requirement TEXT NOT NULL,
    created_at TIMESTAMP NULL,
    created_by BIGINT NOT NULL,
    updated_at TIMESTAMP NULL,
    updated_by BIGINT NOT NULL
);

CREATE TABLE attachment (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    module VARCHAR(255) NOT NULL,
    module_id BIGINT NOT NULL,
    url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NULL,
    created_by BIGINT NOT NULL,
    updated_at TIMESTAMP NULL,
    updated_by BIGINT NOT NULL
);

CREATE TABLE registration (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    school_name VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    social_media VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NULL,
    created_by BIGINT NOT NULL,
    updated_at TIMESTAMP NULL,
    updated_by BIGINT NOT NULL
);

CREATE TABLE student (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    sales_id BIGINT NOT NULL,
    name VARCHAR(255) NOT NULL,
    identity_number VARCHAR(255) NOT NULL,
    birthplace VARCHAR(255) NOT NULL,
    date_of_birth DATE NOT NULL,
    address VARCHAR(255) NOT NULL,
    RT VARCHAR(255) NOT NULL,
    RW VARCHAR(255) NOT NULL,
    subdistrict VARCHAR(255) NOT NULL,
    district VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    province VARCHAR(255) NULL,
    religion VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    description VARCHAR(255) NULL,
    created_at TIMESTAMP NULL,
    created_by BIGINT NOT NULL,
    updated_at TIMESTAMP NULL,
    updated_by BIGINT NOT NULL
);

CREATE TABLE student_info (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_id BIGINT NOT NULL,
    height INT NOT NULL,
    weight INT NOT NULL,
    gender ENUM('L', 'P') NOT NULL,
    uniform_size VARCHAR(255) NOT NULL,
    previous_school VARCHAR(255) NOT NULL,
    father_name VARCHAR(255) NOT NULL,
    father_job VARCHAR(255) NOT NULL,
    father_phone VARCHAR(255) NOT NULL,
    mother_name VARCHAR(255) NOT NULL,
    mother_job VARCHAR(255) NOT NULL,
    mother_phone VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NULL,
    created_by BIGINT NOT NULL,
    updated_at TIMESTAMP NULL,
    updated_by BIGINT NOT NULL
);



