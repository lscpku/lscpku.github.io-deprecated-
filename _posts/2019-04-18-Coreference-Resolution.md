# Coreference Resolution

### What is Coreference Resolution
- Identify all **mentions** that refer to the same real world entity
- tricky and hard
	- split antecedents("A..B..they..")
	- ``**Akash** was to be **a tree**``
	- entities have parts
- Application
	- Full text understanding(QA, summarization, info extraction, ...);
	- Machine translation(languages have different features for gender, number, dropped nouns, etc.)
	- Dialogue systems (more than a single turn)

### CR in two steps
1. Detect the mentions(can be nested) (easy)
2. Cluster the mentions (hard)

### Mention Detection
- mention: span of text referring to some entity
	- pronouns				use a POS tagger
	- named entities		use a NER system
	- noun phrases			use a parser(especially a constituency parser)
- tricky cases
	- ``It is sunny``
	- ``Every student``(what about "Every student must do his homework"?)
	- ``No student``
	- ``The best donut in the world``: unclear
	- ``100 miles``
- Solution to bad mentions
	1. train a classifier
	2. Much more commonly, keep all as "candidates" and run coreference resolution
- Can we avoid a pipelined system
	- not using a POS tagger, a NER system and a parser
	- jointly do two steps end-to-end

### Some linguistics
- Related concept of coreference in linguistics: **anaphora**
	- When a term(anaphor) refers to another term(antecedent)
	- The interpretation of the anaphor is in some way determined by the interpretation of the antecedent