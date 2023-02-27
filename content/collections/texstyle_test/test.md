---
id: 8a4f5221-91f5-4bb9-9832-217620d6552d
blueprint: texstyle_test
title: Test
bard_field:
  -
    type: heading
    attrs:
      class: title
      id: '123'
      level: 1
    content:
      -
        type: text
        text: 'Title (blue)'
  -
    type: paragraph
    attrs:
      class: introduction
      id: null
    content:
      -
        type: text
        text: 'Introduction (green) Lorem '
      -
        type: text
        marks:
          -
            type: link
            attrs:
              class: null
              href: '123'
              rel: null
              target: null
              title: 'link title'
          -
            type: bold
            attrs:
              title: 'bold title'
        text: ipsum
      -
        type: text
        text: ' dolor sit '
      -
        type: text
        marks:
          -
            type: bold
            attrs:
              title: abc
        text: 'amet '
      -
        type: text
        text: 'consectetur adipisicing elit. Tenetur, inventore sapiente! Expedita '
      -
        type: text
        marks:
          -
            type: link
            attrs:
              class: null
              href: '123'
              rel: null
              target: null
              title: null
        text: nost
      -
        type: text
        marks:
          -
            type: bold
            attrs:
              title: null
        text: rum
      -
        type: text
        text: ' cupiditate illum sequi nemo aperiam facere saepe, explicabo quas. Molestiae dolorum, nihil nobis iure laudantium quod obcaecati.'
  -
    type: paragraph
    attrs:
      class: null
      id: null
    content:
      -
        type: text
        text: 'Default (red) ipsum dolor sit amet '
      -
        type: text
        marks:
          -
            type: btsSpan
            attrs:
              class: brand-text
        text: 'consectetur adipisicing'
      -
        type: text
        text: ' elit. Tenetur, inventore sapiente! Expedita nostrum cupiditate illum sequi nemo aperiam facere saepe, explicabo quas. Molestiae dolorum, nihil nobis iure laudantium quod obcaecati.'
  -
    type: bulletList
    attrs:
      class: square-list
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
              id: null
            content:
              -
                type: text
                text: 'Square List'
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
              id: null
            content:
              -
                type: text
                text: Some
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
              id: null
            content:
              -
                type: text
                text: More
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
              id: null
            content:
              -
                type: text
                text: Items
  -
    type: orderedList
    attrs:
      class: roman-list
      start: 5
      reversed: null
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
              id: null
            content:
              -
                type: text
                text: 'Roman List'
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
              id: null
            content:
              -
                type: text
                text: Some
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
              id: null
            content:
              -
                type: text
                text: More
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
              id: null
            content:
              -
                type: text
                text: Items
  -
    type: btsDiv
    attrs:
      class: two-columns
    content:
      -
        type: paragraph
        attrs:
          class: null
          id: null
        content:
          -
            type: text
            text: 'Two columns lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet molestias culpa sapiente, et quos iste at praesentium assumenda vero modi fugiat tempore dolores nostrum, soluta eaque. Possimus, modi incidunt.'
      -
        type: paragraph
        attrs:
          class: null
          id: null
        content:
          -
            type: text
            text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet molestias culpa sapiente, et quos iste at praesentium assumenda vero modi fugiat tempore dolores nostrum, soluta eaque. Possimus, modi incidunt.'
      -
        type: paragraph
        attrs:
          class: null
          id: null
        content:
          -
            type: text
            text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet molestias culpa sapiente, et quos iste at praesentium assumenda vero modi fugiat tempore dolores nostrum, soluta eaque. Possimus, modi incidunt.'
      -
        type: paragraph
        attrs:
          class: null
          id: null
        content:
          -
            type: text
            text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet molestias culpa sapiente, et quos iste at praesentium assumenda vero modi fugiat tempore dolores nostrum, soluta eaque. Possimus, modi incidunt.'
updated_by: f35721f8-8c4c-4e40-a119-10a6ac6e1447
updated_at: 1676475747
bard_field_menu:
  -
    type: heading
    attrs:
      class: title
      id: null
      level: 1
    content:
      -
        type: text
        text: 'Title (blue)'
  -
    type: paragraph
    attrs:
      class: introduction
    content:
      -
        type: text
        text: 'Introduction (green) Lorem ipsum dolor sit '
      -
        type: text
        marks:
          -
            type: link
            attrs:
              class: action
              href: null
              rel: null
              target: null
              title: null
        text: amet
      -
        type: text
        text: ' consectetur adipisicing elit. Tenetur, inventore sapiente! Expedita nostrum cupiditate illum sequi nemo aperiam facere saepe, explicabo quas. Molestiae dolorum, nihil nobis iure laudantium quod obcaecati.'
  -
    type: paragraph
    attrs:
      class: null
    content:
      -
        type: text
        text: 'Default (red) ipsum dolor sit amet '
      -
        type: text
        marks:
          -
            type: btsSpan
            attrs:
              class: brand-text
        text: 'consectetur adipisicing'
      -
        type: text
        text: ' elit. Tenetur, inventore sapiente! Expedita nostrum cupiditate illum sequi nemo aperiam facere saepe, explicabo quas. Molestiae dolorum, nihil nobis iure laudantium quod obcaecati.'
  -
    type: bulletList
    attrs:
      class: square-list
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Square List'
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: Some
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: More
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: Items
  -
    type: orderedList
    attrs:
      class: roman-list
      start: 5
      reversed: null
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Roman List'
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: Some
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: More
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: Items
  -
    type: btsDiv
    attrs:
      class: two-columns
    content:
      -
        type: paragraph
        attrs:
          class: null
        content:
          -
            type: text
            text: 'Two columns lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet molestias culpa sapiente, et quos iste at praesentium assumenda vero modi fugiat tempore dolores nostrum, soluta eaque. Possimus, modi incidunt.'
      -
        type: paragraph
        attrs:
          class: null
        content:
          -
            type: text
            text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet molestias culpa sapiente, et quos iste at praesentium assumenda vero modi fugiat tempore dolores nostrum, soluta eaque. Possimus, modi incidunt.'
      -
        type: paragraph
        attrs:
          class: null
        content:
          -
            type: text
            text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet molestias culpa sapiente, et quos iste at praesentium assumenda vero modi fugiat tempore dolores nostrum, soluta eaque. Possimus, modi incidunt.'
      -
        type: paragraph
        attrs:
          class: null
        content:
          -
            type: text
            text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet molestias culpa sapiente, et quos iste at praesentium assumenda vero modi fugiat tempore dolores nostrum, soluta eaque. Possimus, modi incidunt.'
---
