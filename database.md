categorys:

- id_cate: int pk
- name: varchar(50)

products:

- id_pro: int pk
- name: varchar(255)
- image: varchar(255)
- price: int
- price_sale: int
- special: bit(1)
- views: int
- gender: varchar(20)
- description: text
- id_brand: int fk
- id_pro_color: int fk
- id_pro_size: int fk
- id_cate: int fk

product_brand:

- id_brand: int pk
- name: varchar(50)
- logo: varchar(255)

product_color:

- id_pro_color: int pk
- color: varchar(20)
- id_pro: int fk

product_size:

- id_pro_size: int pk
- size: varchar(20)
- id_pro: int fk

product_detail_img:

- id_pro_detail_img: int pk
- image: varchar(255)
- id_pro: int fk

user:

- id_user: varchar(20) pk
- password: varchar(20)
- image: varchar(255)
- name: varchar(255)
- phone: int
- email: varchar(50)
- address: varchar(255)
- roles: bit(1)

comment:

- id_comment: int pk
- content: text
- date: date
- rate: tinyint(5)
- id_pro int fk
- id_user int fk

order:

- id_order: int pk
- name: varchar(255)
- email: varchar(50)
- phone: int
- address: varchar(255)
- date: date
- id_user: varchar(20) fk

order_total:

- id_order_total: int pk
- quantity: int
- total: int
- id_order: int fk
- id_pro: int fk

Front-End: Công, Phương
Back-End: Hồng, Thành, Sỹ

Chi tiết sp: Phương
Giỏ hàng: Công
Thanh toán: Thành
Tạo đơn hàng / quản lý: Hồng
