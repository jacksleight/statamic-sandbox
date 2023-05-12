---
id: 8a4f5221-91f5-4bb9-9832-217620d6552d
blueprint: texstyle_test
title: Test
bard_field:
  -
    type: heading
    attrs:
      class: title
      hero: null
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
        text: 'Introduction (green) Lorem ipsum dolor sit amet '
      -
        type: text
        marks:
          -
            type: btsSpan
            attrs:
              class: brand-text
        text: consectetur
      -
        type: text
        text: ' adipisicing elit. Tenetur, inventore sapiente! Expedita nostrum cupiditate illum sequi nemo aperiam facere saepe, explicabo quas. Molestiae dolorum, nihil nobis iure laudantium quod obcaecati.'
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
      list_style_type: null
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
updated_by: f35721f8-8c4c-4e40-a119-10a6ac6e1447
updated_at: 1683902256
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
bard_field_html: '<h1 class="title">Title (blue)</h1><p class="introduction">Introduction (green) Lorem ipsum dolor sit amet <span class="brand-text">consectetur</span> adipisicing elit. Tenetur, inventore sapiente! Expedita nostrum cupiditate illum sequi nemo aperiam facere saepe, explicabo quas. Molestiae dolorum, nihil nobis iure laudantium quod obcaecati.</p><p class="paragraph">Default (red) ipsum dolor sit amet <span class="brand-text">consectetur adipisicing</span> elit. Tenetur, inventore sapiente! Expedita nostrum cupiditate illum sequi nemo aperiam facere saepe, explicabo quas. Molestiae dolorum, nihil nobis iure laudantium quod obcaecati.</p><ul class="square-list"><li><p class="paragraph">Square List</p></li><li><p class="paragraph">Some</p></li><li><p class="paragraph">More</p></li><li><p class="paragraph">Items</p></li></ul><ol class="roman-list" style="list-style-type: ;" start="5"><li><p class="paragraph">Roman List</p></li><li><p class="paragraph">Some</p></li><li><p class="paragraph">More</p></li><li><p class="paragraph">Items</p></li></ol><div class="two-columns"><p class="paragraph">Two columns lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet molestias culpa sapiente, et quos iste at praesentium assumenda vero modi fugiat tempore dolores nostrum, soluta eaque. Possimus, modi incidunt.</p><p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet molestias culpa sapiente, et quos iste at praesentium assumenda vero modi fugiat tempore dolores nostrum, soluta eaque. Possimus, modi incidunt.</p><p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet molestias culpa sapiente, et quos iste at praesentium assumenda vero modi fugiat tempore dolores nostrum, soluta eaque. Possimus, modi incidunt.</p><p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet molestias culpa sapiente, et quos iste at praesentium assumenda vero modi fugiat tempore dolores nostrum, soluta eaque. Possimus, modi incidunt.</p></div>'
---
