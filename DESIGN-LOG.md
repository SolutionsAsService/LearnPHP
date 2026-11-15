# Design log: Learn PHP (Laravel redo)

**Honesty note: the panel was not real.** No sub-agents were available. The "round" below is one author reading the seats' doctrine against measurements. It is not an independent panel, and S2/S3 are NOT met. Budgeted run: one design pass, one panel round. Not recorded in the ledger (`import_log.py` not run). No graph tooling used; no `pick_panel.py` run; seats not briefed from `seats/`.

## Traversal Plan
- Brief: rebuild a six-page plain-PHP site as Laravel. Mode: Adaptive (learners). Run type: Full (redo). Bound: "ONE design pass, ONE panel round".
- Seed: Stance, Rules and Breaker labels were not copied from the graph (anchor-graph.md not read, budget). Anchor Ledger below is therefore informal.
- Pages (R0 inventory): / , /features, /syntax, /benefits, /examples, /contact (+errors, +success states), /404, menu open and closed. R0 defects: nav inside main, broken include path, missing script.js.
- Palette source: PHP's own syntax-highlight colours (php.ini highlight.keyword green, default blue, string red, comment orange) plus php.net purple. One hue per page (features green, syntax blue, benefits orange, examples red, contact purple). Light and dark-slab variants.

## Frontier
| Candidate | Status |
|---|---|
| Hero as a PHP array whose rows are the page links | TAKEN M1 |
| Per-page wash and accent from the palette | TAKEN M2 |
| Dark-mode theme for body | DEFERRED (hero and header already dark; budget) |
| Directional ΔE and contrast re-check after every edit | DEFERRED beyond final run |

## M1 Hero listing (BREAK: the landing is source code, not a banner)
Depends: none. Advanced pole: the site's subject drawn as its own syntax, each row a link coloured by page. Acceptable pole: plain rows, 48px targets, labelled links. Alternatives rejected: card grid (six cards is not a form); illustration (carries no fact). Fence: first-screen rule. Measured at 390x844: listing bottom about 580px, no sideways scroll. First attempt wrapped values onto two lines at 15px; fixed to 13px nowrap.

## M2 Zoned grounds
Night slab for header, hero and footer; tinted wash per page via `body.p-<page>`. Hues stay constant across zones.

## Panel (single author, not real), WHOLE round 1
| Seat (doctrine) | Observed | Verdict |
|---|---|---|
| Krug (usability) | five links visible on first screen, rows labelled | PASS |
| Inclusion (Mace) | skip link, landmarks, focus ring, aria-current, errors announced via role=alert | PASS |
| Cairo (measurement) | grader below, all zero | PASS |
| Debord (claims) | every printed output came from the php CLI | PASS |

#### Resolutions, round 1
| Cairo: input font-size reported under 16 on /contact | ADAPT: my `font:` shorthand with `inherit` was invalid CSS and was dropped; replaced with longhands, now 0 |
| Krug: hero rows wrapped to two lines | ADAPT: 13px nowrap on phones |

## S4 push
Hero font and spacing tightened once (15px to 13px on phone); measured: docH 1365 to 1349, rows single-line.

## Final measurements (after last edit, grader at 390x844 touch)
All seven pages: overflowX 0, smallTargets 0, tinyText 0, inputsUnder16 0; statuses 200 x6, 404. h1 bottom: / 115, features 133, syntax 133, benefits 133, examples 170, contact 133, 404 133. States (own probe): menu closed/open, contact errors, contact success: overflow 0, targets under 44px 0, text under 12px 0.
Palette (computed): min pairwise ΔE76 light 35.4, dark 30.0; min contrast vs ground light 5.49, dark 6.20. Hue is paired with label and position, never alone.

## Compliance Check
Not met: real panel, S2, S3, seed labels, Shadw/Vercel files (this is a Laravel app, which is not a static site; not added), ledger import. Mobile Floor measured at final state; R0 of the old site not measured (it was removed).

## Carry-forward
- `font: 16px/1.4 inherit` is invalid (inherit cannot stand for the family) and drops the whole declaration; the grader caught it.
