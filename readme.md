# Описание
Бэкап запущенных сервисов

## Запуск:
1. Добавить настойки хостов из файла `hosts.example` в файл `/etc/ansible/hosts`
2. В файле указать все необходимые параметры (ip-адрес хоста, пользователь и т.д.)
3. Запустить плейбук `ansible-playbok example.yml --vault-password-file example_pass_file pass -K`

## Полезные ссылки
- [Ansible](https://docs.ansible.com/ansible/latest/index.html)
- [Шаблонизатор j2](https://jinja.palletsprojects.com/)