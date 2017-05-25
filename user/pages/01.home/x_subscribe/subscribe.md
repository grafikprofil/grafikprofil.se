---
title: 'Vill du ha lite mer information från oss?'
process:
    markdown: true
    twig: true
hidemenu: true
form:
    name: help-form
	action: /subscribe
    fields:
        -
            name: name
            label: Name
            placeholder: 'Enter your name'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Submit
    process:
        - message: 'Thank you for your feedback!'
        - email:
            from: "{{ config.plugins.email.from }}"
            to: "{{ config.plugins.email.to }}"
            subject: "Contact by {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
content:
    items: @self.modular
    order:
        by: default
        dir: asc
---

<!-- <form action="#">
<input type="text" name="" value="" placeholder="min@e-postadress.se" required>
<input type="submit" name="" value="Jag vill veta mer!">
</form> -->
{% include "forms/form.html.twig" %}
<div id="form-result"></div>