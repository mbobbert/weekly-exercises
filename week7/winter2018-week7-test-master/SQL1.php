SQL q1
SELECT * FROM delivery
WHERE sent_at IS NOT NULL AND delivered_at IS NULL
ORDER BY sent_at ASC
LIMIT 10


SQLq2
INSERT INTO `complaint` (customer_name, text, filed_at)
VALUES
('Maud Williams', 'I was nearly not perfectly satisfied!', '2017-02-17 14:55:12'),
('Roger Bernard', 'The kid size does not fit my kid!', '2017-02-01 19:13:48');
