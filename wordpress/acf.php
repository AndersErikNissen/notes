<?php

/**
 * TIP: 👯‍♂️ Simulate Repeater fields
 * NOTE: Now that I think about it, it very much like meta-fields in Shopify 💥
 
 * Instead of creating fields, with logic that looks if the prior field of the same time has been filled.
 * Create a new Custom Post Type (CPT), and use a Relationship Field.

 * Example: FAQ
 * 1. Create a Custom Post Type (CTP), called Question and Answer (Q&A)
 * a. The CTP has fields for the question and answer
 * 2. Create a field called FAQ (Relationship Field)
 * a. The relationship is going be the Q&A CTP
 * 3. The user now has control over what Q&A's to pick
 * a. It's also easy to change the order, and it's possible to have A Single Source of Truth (SSoT).
*/
