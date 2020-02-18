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
	- ``Every student``
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
- Anaphora vs Coreference:
    - anaphora: (textual relationship) he $\to$ Obama
      coreference: Obama & Barack Obama
    - Not all anaphoric relations are coreferential
        - No dancer twisted her knee
        - Every dancer twisted her knee
        - We went to see **a concert** last night. **The tickets** were really expensive. (bridging anaphora, but not coreference)
- Anaphora vs Cataphora:
    - Originally, anaphora for references before mention, cataphora for behind.
    - In modern linguistics, two cases both referred to as anaphora
    - In NLP, always look backward for reference

### Coreference Models
1. Rule-based
    - pronominal anaphora resolution(the intersection of anaphora and coreference)
2. Mention Pair
3. Mention Ranking
4. Clustering

### Traditional pronominal anaphora resolution: Hobbs' naive algorithm
- Only for finding the reference of pronouns
1. Begin at the NP immediately dominating the pronoun
2. Go up tree to first NP or S. Call this X,
