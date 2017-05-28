---
title: 'Vill du ha hjälp av oss, eller bara veta mer?'
content:
    items: '@self.modular'
process:
    markdown: true
    twig: true
hidemenu: true
form:
    action: /
    name: short-contact-form
    template: form-messages
    fields:
        - name: name
          label: Ditt namn
          autocomplete: on
          type: text
          validate:
            required: true
            message: 'Du måste ange ditt namn'

        - name: email
          label: Din e-postadress
          type: email
          validate:
            required: true
            message: 'Du måste ange din e-postadress'

        - name: phone
          label: Ditt telefonnummer (frivilligt)
          type: text

        - name: message
          label: Vad går du och funderar på?
          type: textarea
          validate:
            required: true
            message: 'Du måste ange ett meddelande'

    buttons:
        - type: submit
          value: Skicka meddelande

    process:
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.from }}"
              - "{{ form.value.email }}"
            subject: "[KONTAKTFORMULÄR] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - message: Vi har mottagit ditt meddelande och återkommer alldeles strax!
---

{% include "forms/form.html.twig" with { form: forms('short-contact-form') } %}