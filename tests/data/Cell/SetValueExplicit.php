<?php

use PhpOffice\PhpSpreadsheet\Cell\DataType;

return [
    [
        1234567890123456789,
        '01234567890123456789',
        DataType::TYPE_NUMERIC,
    ],
    [
        123.456,
        '123.456',
        DataType::TYPE_NUMERIC,
    ],
    [
        1234567890123456789,
        1234567890123456789,
        DataType::TYPE_NUMERIC,
    ],
    [
        123.456,
        123.456,
        DataType::TYPE_NUMERIC,
    ],
];
