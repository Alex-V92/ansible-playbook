# Описание
В проекте содержатся плейбуки для развертывания серверов

## Запуск:
1. Добавить настойки хостов из файла `hosts.example` в файл `/etc/ansible/hosts`
2. В файле указать все необходимые параметры (ip-адрес хоста, домен и т.д.)
3. Добавить [публичные ключи](https://confluence.atlassian.com/bitbucket/access-keys-294486051.html) всех серверов в [репозиторий]
3. Запустить плейбук

## Полезные ссылки
- [Ansible](https://docs.ansible.com/ansible/latest/index.html)
- [Шаблонизатор j2](https://jinja.palletsprojects.com/)