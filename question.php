1. 如何设置一个严格30分钟过期的Session
    1. 设置Cookie过期时间30分钟, 并设置Session的lifetime也为30分钟.
    2. 自己为每一个Session值增加Time stamp.
    3. 每次访问之前, 判断时间戳.
